/** 
 * Dynamic drop-down (Mac-style) skinner for jQuery
 * 
 * Copyright (c) 2008 Mulyadi Oey
 *   http://www.mulyadi.org
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 */

(function($) {
	$.fn.modmac = function() {
		var id = $(this).attr("id");
		$(this).hide();
		
		// ----- generate equivalent markups -----
		
		var menuId = "modmac_" + id;
		// <option>'s selected attribute is considered binary; not as an attribute name which can have different values
		var initialSelection = $(this).find("option:selected").text();
		var menuHtml = 	'<div id="' + menuId + '" class="dropdown clearfix" tabindex="0">' + "\n" +
  						'	<div class="arrow">' + "\n" +
    					'		<div class="list">' + "\n" +
      					'			<p>' + initialSelection + '</p>' + "\n" +
						'		</div>' + "\n" +
						'	</div>' + "\n" +
						'</div>';
		
		var menuItemId = menuId + "_item";
		var menuItemHtml = '<div id="' + menuItemId + '" class="dropdownitem">' + "\n";
		// iterate all <option>
		$(this).find("option").each(function() {
			// e.g. <p id="id_value">value</p>
			menuItemHtml += '<p id="' + id + '___' + $(this).attr("value") + '">' + $(this).text() + '</p>' + "\n";
		});
		menuItemHtml += '</div>';
		
		$(this).before(menuHtml + menuItemHtml);
		
		// ----- visual initialization -----
		
		$("#" + menuItemId).hide();
		
		// ----- event handling -----
		
		var menuSelector = '#' + menuId;
		var menuItemSelector = '#' + menuItemId;
		
		$(menuSelector).keyup(function(event) {
			var keycode = event.keyCode;
			if (keycode == 13 || keycode == 27 || keycode == 32) {	// 13 (enter), 27 (esc), 32 (spacebar)
				$(menuItemSelector).toggle();
				
				// only care when the menu item is visible
				if ($(menuItemSelector).css("display") != "none") {
					var offset = $(this).offset();
					$(menuItemSelector).css("left", offset.left + "px");
					$(menuItemSelector).css("top", offset.top + 19 + "px");
				
					// highlight item list that is currently selected
					var currentText = $(menuSelector + ' p').text();
					$(menuItemSelector + ' p').each(function() {
						var itemListText = $(this).text(); 
						if (itemListText == currentText) {
							$(this).addClass("selected");
						}
					});
				}
				else {
					updateSelection();
				}
			}
			
			if (keycode == 38) { // 38 (up), 40 (down)
				if ($(menuItemSelector).css("display") != "none") {
					
					// update the current selection if the current selection is not the first
					var first = $(menuItemSelector + " p:first");
					var currentlySelectedItem = $(menuItemSelector + ' p.selected');
					if (first.attr("id") != currentlySelectedItem.attr("id")) {	// note: first and currentlySelectedItem are two distinct objects
						// highlight the item immediately above 
						var previous = $(menuItemSelector + ' p.selected').prev();
						previous.addClass("selected");
						currentlySelectedItem.removeClass("selected");					
					}
				}		
			}
			
			if (keycode == 40) {
				if ($(menuItemSelector).css("display") != "none") {	
					// update the current selection if the current selection is not the last
					var last = $(menuItemSelector + " p:last");
					var currentlySelectedItem = $(menuItemSelector + ' p.selected');
					if (last.attr("id") != currentlySelectedItem.attr("id")) {	// note: first and currentlySelectedItem are two distinct objects
						// highlight the item immediately above 
						var next = $(menuItemSelector + ' p.selected').next();
						next.addClass("selected");
						currentlySelectedItem.removeClass("selected");					
					}
				}
			}
		});
		
		$(menuSelector).click(function() {
			// show items list
			$(menuItemSelector).toggle();
			
			// only care when the menu item is visible
			if ($(menuItemSelector).css("display") != "none") {
				var offset = $(this).offset();
				$(menuItemSelector).css("left", offset.left + "px");
				$(menuItemSelector).css("top", offset.top + 19 + "px");
				
				// highlight item list that is currently selected
				var currentText = $(menuSelector + ' p').text();
				$(menuItemSelector + ' p').each(function() {
					var itemListText = $(this).text(); 
					if (itemListText == currentText) {
						$(this).addClass("selected");
					}
				});
			}
		});
		
		$(menuItemSelector + ' p').mouseover(function() {
			// make sure other list item is not selected
			$(menuItemSelector + ' p').removeClass("selected");

			$(this).addClass("selected");
		});
	
		$(menuItemSelector + ' p').mouseout(function() { $(this).removeClass("selected"); } );
	
		$(menuItemSelector + ' p').click(function() {
			// update current selection
			$(menuSelector + ' p').text($(this).text());
			// hide items list
			$(menuItemSelector).hide();
			
			// update the original <option>
			var pId = $(this).attr("id").split("___");
			var menuOriId = pId[0];
			var menuItemOriValue = pId[1];
			var menuOriSelector = "#" + menuOriId;
			$(menuOriSelector).find("option").each(function() {
				if ($(this).attr("value") == menuItemOriValue) {
					this.selected = "selected";
				}
				else {
					this.selected = "";
				}
			});
		});
	
		// hide menu when user clicks anywhere but the dropdown
		$(document).mouseup(function(event) {
			// TODO: take care of traditional and Microsoft model
			var fromDropdown = $(event.target).parents(menuSelector).length;
			if (fromDropdown == 0) {	// 0 means the event is not originated from the dropdown
				$(menuItemSelector).hide();
				updateSelection();
			}
		});
		
		// ========== utility functions ==========
		
		/*
			This function checks whether the current selection is already updated with the new selection, if any.
		*/
		function isSelectionUpdated() {
			// sometimes user hover the mouse over menu items then continue outside of the whole menu
			// this will cause no menu item being selected
			// in this case, we will keep the current selection intact (i.e. return true)
			console.debug("length: " + $(menuItemSelector + ' p.selected').length);
			if ($(menuItemSelector + ' p.selected').length == 0) {
				return true;
			}
			
			var retVal = $(menuSelector + ' p').text() == $(menuItemSelector + ' p.selected').text();
			console.debug("retVal is " + retVal);
			return retVal;
		}
		
		/* 
			This function updates the current selection on the menu .
			Note that this function also updates the original <select>.
		*/
		function updateSelection() {
			if (!isSelectionUpdated()) {
				var currentSelection = $(menuSelector + ' p').text();
				var updatedSelection = $(menuItemSelector + ' p.selected').text();
				console.debug("currentSelection is " + currentSelection + "; updatedSelection is " + updatedSelection);
				$(menuSelector + ' p').text(updatedSelection);
				
				updateOriginalSelection($(menuItemSelector + ' p.selected'));
			}
		}
		
		/*
			This function updates the original <select> based on the information carried in argument:element.
			Precondition:
			-- argument:element is a JavaScript or jQuery object
		*/
		function updateOriginalSelect(element) {
			var pId = element.attr("id").split("___");
			var menuOriId = pId[0];
			var menuItemOriValue = pId[1];
			var menuOriSelector = "#" + menuOriId;
			$(menuOriSelector).find("option").each(function() {
				if ($(this).attr("value") == menuItemOriValue) {
					this.selected = "selected";
				}
				else {
					this.selected = "";
				}
			});
		}
	}
})(jQuery);
