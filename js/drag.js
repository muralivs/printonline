// JavaScript Document

var captioner = 1;

/*var newdiv = document.createElement('div');
newdiv.innerHTML = "Support Plan " + (counter + 1) + " <br><textarea name='supports[]' id=counter rows='5' cols='35'>";
document.getElementById('divSupport').appendChild(newdiv);
var newdiv = document.createElement('div');
newdiv.innerHTML = "Backup " + (counter + 1) + " <br><textarea name='supportWho[]' id=counter rows='5' cols='35'>";
document.getElementById('divWho').appendChild(newdiv);
counter++
return true;*/

/*function onload_builder()
{
	alert("Welcome");
	var parent_contain = document.getElementById('containment-wrapper');
	var parant_captions = document.getElementById('caption_builder');
	
	alert(parant_captions);
	alert(parent_contain);
	
	var caption = document.createElement('div');
	var captioner = document.createElement('div');
	
	caption.setAttribute("id", "draggable"+captioner);
	caption.setAttribute("class", "draggable ui-state-active ui-widget-content");
	
	captioner.setAttribute("id", "captioner_div"+captioner);
	captioner.innerHTML=htmlcode;
	
	parent_contain.appendChild(caption);
 	parant_captions.appendChild(captioner);
	document.getElementById("captioner_div"+captioner).innerHTML="<tr><td class='builder_tab_tit' valign='top' align='center'>Caption "+captioner+":<br /><div class='builder_cancel'><a href='#'>X</a></div></td><td><div><textarea cols='25' rows='5' onkeyup='onKeyDown(this.value);'>iron and chip it on the green</textarea></div><div style='float:left;'><select name=''><option> Size: Auto</option></select></div><div style='float:left;'><select name='' style='width:133px;'><option>Align: left top</option></select></div></td></tr>";  
  	captioner++;
}*/

$(function() {
	$( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
	$( "#draggable2" ).draggable({ containment: "#containment-wrapper", scroll: false });
	$( "#imge" ).draggable({ containment: "#containment-wrapper", scroll: false });
	$( "#upimge" ).draggable({ containment: "#containment-wrapper", scroll: false });
});


$(function() {
	$( "#draggable1" ).resizable({
		containment: "#containment-wrapper"
	});
	$( "#draggable2" ).resizable({
		containment: "#containment-wrapper"
	});
	$( "#img2" ).resizable({
		containment: "#containment-wrapper2"
	});
});


//-------resize font while div resize--------

/*(function($) {
		  alert("ready");
    $.fn.textfill = function(options) {
        var fontSize = options.maxFontPixels;
        var ourText = $('span:visible:first', this);
        var maxHeight = $(this).height();
        var maxWidth = $(this).width();
        var textHeight;
        var textWidth;
        do {
            ourText.css('font-size', fontSize);
            textHeight = ourText.height();
            textWidth = ourText.width();
            fontSize = fontSize - 1;
        } while ((textHeight > maxHeight || textWidth > maxWidth) && fontSize > 3);
        return this;
    }
})(jQuery);

$(document).ready(function() {
    $('#draggable1').textfill({ maxFontPixels: 72 });
});*/


/*function edit()
{
	$(function() {
		$( "#draggable1" ).resizable({
			containment: "#containment-wrapper"
		});
		$( "#draggable2" ).resizable({
			containment: "#containment-wrapper"
		});
	});
	
}

function stoprz()
{

	$( "#draggable1" ).resizable({
	  stop: function(event, ui) { alert ("You Stopped!"); }
	});
	
}
*/

function onKeyDown(divele,changeid)
{
	//alert(document.getElementById(changeid).innerHTML);
	document.getElementById(changeid).innerHTML=divele;
}

function build_meme(x)
{
	//var =document.getElementById('src_img');
	var y=document.getElementById('wraper_img');
	//alert(x.getAttribute("src"));
	var z=x.getAttribute("src");
	y.setAttribute("src", z);
	document.getElementById('imgid').value=z;
}

function change_color(clr)
{
	//alert(clr);
	
	
	var colordiv = clr.innerHTML;
	document.getElementById('textnew_color').value=colordiv;
	var ntxtval=document.getElementById('notextdiv').value.split(",");
	if(document.getElementById('notextdiv').value!='')
	{
	for(nval in ntxtval)
	{
	if(ntxtval[nval]!='')
	{
	document.getElementById('text'+ntxtval[nval]).style.color=colordiv;
	}
	}
	}
	//alert(colordiv);
	$(".draggable").css('color', colordiv);
}

function change_color_input(clr)
{
	//alert(clr);
/*	var colordiv = clr.innerHTML;
	alert(colordiv);*/
	document.getElementById('textnew_color').value="#"+clr;
	
	var ntxtval=document.getElementById('notextdiv').value.split(",");
	if(document.getElementById('notextdiv').value!='')
	{
	for(nval in ntxtval)
	{
	if(ntxtval[nval]!='')
	{
	document.getElementById('text'+ntxtval[nval]).style.color="#"+clr;
	}
	}
	}
	
	$(".draggable").css('color', "#"+clr);
}

function font_change(txt)
{
	$(".draggable").css('font-family', txt);
}



/*function font_change(txt)
{
	$(".draggable").css('font-family', txt);
}*/

function font_size(size,txtid)
{
	//alert(size);
	//alert("#"+txtid);
	$("#"+txtid).css('font-size', size);
}

function font_align(alignment,txtid,texarea_id)
{
	//alert(alignment);
	//alert("#"+txtid);
	switch(alignment)
	{
		case 'left':
			$("#"+txtid).css('text-align', 'left');
			document.getElementById(texarea_id).style.textAlign="left";
			break;
		
		case 'center':
			$("#"+txtid).css('text-align', 'center');
			document.getElementById(texarea_id).style.textAlign="center";
			break;
			
		case 'right':
			$("#"+txtid).css('text-align', 'right');
			document.getElementById(texarea_id).style.textAlign="right";
			break;
			
		case 'justify':
			$("#"+txtid).css('text-align', 'justify');
			document.getElementById(texarea_id).style.textAlign="justify";
			break;
	
	}
}

function wraptxt()
{
	if(document.getElementById('public_wrap').checked == true)
	{
		$(".draggable").css('white-space', 'normal');
	}
	else
	{
		$(".draggable").css('white-space', 'nowrap');
	}
}



function wraptxt2()
{
	
	if(document.getElementById('public_wrap2').checked == true)
	{
		$(".draggable2").css('white-space', 'normal');
	}
	else
	{
		$(".draggable2").css('white-space', 'nowrap');
	}
	//alert('s');
}


//---------- create caption -----------//

var captionater = new Array();
var colomn2 = "";

function addRow(textval,colorval,fontsizeval,dragid,leftalign,rightalign,ffamily,divwidth,divheight) {

	var tableID = "captioner";//alert(fontsizeval);
	if(fontsizeval=='rg' || fontsizeval=='')
	{
		fontsizeval="36";
	}
	
	//alert(divwidth);
	/*if(textval=='Enter here to make meme')
	{
		textval='';
		newtextval="Enter here to make meme";
	}
	else
	{
		newtextval=textval;
	}*/
	var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
	//alert("Rows = "+rowCount);
	var colCount = 2;
	
	//alert("Colomns = "+colCount);
	var row = table.insertRow(rowCount);
	
	var arrlen = captionater.length;
	
	//alert(arrlen);
	
	//alert(captionater[0]);
	
	captionater[arrlen]=arrlen+1;
		
	//alert(captionater[arrlen]);
	
/*	for(var i=0; i<colCount; i++) {
		
		var newcell = row.insertCell(i);
		
		arrlen = captionater.length;
		
		if(i == 0) { 
			newcell.className = "builder_tab_tit";
			newcell.width = "110";
			newcell.valign = "top";
			newcell.align = "center";
			newcell.innerHTML = 'Caption '+captionater[arrlen-1]+':<br /><a id="'+captionater[arrlen-1]+'" href="javascript:void(0);" onclick="deleteRow(\''+captionater[arrlen-1]+'\')"><div class="builder_cancel">X</div></a>';
		} else {
			colomn2 = '<div><textarea cols="25" name="memetext[]" rows="5" onkeyup="onKeyDown(this.value, \'text'+captionater[arrlen-1]+'\');">Enter here to make meme</textarea></div>';
			
			colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtfont'+captionater[arrlen-1]+'" id="txtfont'+captionater[arrlen-1]+'" onchange="font_size(this.value,\'text'+captionater[arrlen-1]+'\');">';
			colomn2 += "<option value='18px'>Size: 18px</option>";
			colomn2 += "<option value='20px'>Size: 20px</option>";
			colomn2 += "<option value='22px'>Size: 22px</option>";
			colomn2 += "<option value='24px'>Size: 24px</option>";
			colomn2 += "<option value='26px'>Size: 26px</option>";
			colomn2 += "<option selected='selected' value='36px'>Size: 36px</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign'+captionater[arrlen-1]+'" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			//alert(colomn2);
			
			newcell.innerHTML = colomn2;
		}
	}*/
	
	

	
	
	
	if(dragid=='null')
	{
		
		
		
		
			for(var i=0; i<colCount; i++) {
		
		var newcell = row.insertCell(i);
		
		if(i==1)
		{
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv').value!='')
		{
			
		var adddivid=document.getElementById('notextdiv').value+","+captionater[arrlen-1];
		document.getElementById('notextdiv').value=adddivid;
		}
		else
		{
			document.getElementById('notextdiv').value=captionater[arrlen-1];
		}
		
		}
		arrlen = captionater.length;
		//alert(captionater[arrlen-1]);
		
		if(i == 0) { 
			newcell.className = "builder_tab_tit";
			newcell.width = "110";
			newcell.valign = "top";
			newcell.align = "center";
			newcell.innerHTML = 'Caption '+captionater[arrlen-1]+':<br /><a id="'+captionater[arrlen-1]+'" href="javascript:void(0);" onclick="deleteRow(\''+captionater[arrlen-1]+'\')"><div class="builder_cancel">X</div></a>';
		} else {
			colomn2 = '<div><input type="text" name="memetext[]" id="txtnew'+captionater[arrlen-1]+'" rows="4" onkeyup="onKeyDown(this.value, \'text'+captionater[arrlen-1]+'\');" value="'+textval+'" /></div>';
			
			colomn2 += "<div style='float:left; width:200px; margin-top:5px;'>";
			colomn2 += '<select name="txtfont[]" id="txtfont'+captionater[arrlen-1]+'" onchange="font_size(this.value,\'text'+captionater[arrlen-1]+'\');">';
			if(fontsizeval==18)
			{
			colomn2 += "<option value='18px' selected='selected'>Size: 18px</option>";
			}
			else
			{
			colomn2 += "<option value='18px'>Size: 18px</option>";
			}
			if(fontsizeval==20)
			{
			colomn2 += "<option value='20px' selected='selected'>Size: 20px</option>";
			}
			else
			{
			colomn2 += "<option value='20px'>Size: 20px</option>";
			}
			if(fontsizeval==22)
			{
			colomn2 += "<option value='22px' selected='selected'>Size: 22px</option>";
			}
			else
			{
			colomn2 += "<option value='22px'>Size: 22px</option>";
			}
			if(fontsizeval==24)
			{
			colomn2 += "<option value='24px' selected='selected'>Size: 24px</option>";
			}
			else
			{
			colomn2 += "<option value='24px'>Size: 24px</option>";
			}
			if(fontsizeval==26)
			{
			colomn2 += "<option value='26px' selected='selected'>Size: 26px</option>";
			}
			else
			{
			colomn2 += "<option value='26px'>Size: 26px</option>";
			}
			if(fontsizeval==36)
			{
			colomn2 += "<option value='36px' selected='selected'>Size: 36px</option>";
			}
			else
			{
			colomn2 += "<option value='36px'>Size: 36px</option>";
			}
			if(fontsizeval==46)
			{
			colomn2 += "<option value='46px' selected='selected'>Size: 46px</option>";
			}
			else
			{
			colomn2 += "<option value='46px'>Size: 46px</option>";
			}
			if(fontsizeval==56)
			{
			colomn2 += "<option value='56px' selected='selected'>Size: 56px</option>";
			}
			else
			{
			colomn2 += "<option value='56px'>Size: 56px</option>";
			}
			if(fontsizeval==66)
			{
			colomn2 += "<option value='66px' selected='selected'>Size: 66px</option>";
			}
			else
			{
			colomn2 += "<option value='66px'>Size: 66px</option>";
			}
			if(fontsizeval==76)
			{
			colomn2 += "<option value='76px' selected='selected'>Size: 76px</option>";
			}
			else
			{
			colomn2 += "<option value='76px'>Size: 76px</option>";
			}
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			newcell.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
		}
	}
		
	
	var captions = document.getElementById('containment-wrapper');
	//alert(captions);
	var newcaption = document.createElement('div');
	
	newcaption.setAttribute("id","draggable"+captionater[arrlen-1]);
	newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
	
	if(captionater[arrlen-1] == 1) {
		newcaption.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; width:"+divwidth+"px; font-size:"+fontsizeval+"px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>"+textval+"</span>";
	} else if(captionater[arrlen-1] == 2) {
		newcaption.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; width:"+divwidth+"px; font-size:"+fontsizeval+"px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>"+textval+"</span>";
	
			
		
	} else {
		newcaption.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; width:"+divwidth+"px; text-align:left; font-size:"+fontsizeval+"px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>"+textval+"</span>";
		
	}
	//newcaption.setAttribute("style","text-align:left;");
	
	//newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>Enter here to make meme</span>";
	
	captions.appendChild( newcaption );
	

	$( "#draggable"+captionater[arrlen-1] ).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable"+captionater[arrlen-1] ).resizable({
		containment: "#containment-wrapper"
	});
	
	
	}
	
	else
	{
		
		//alert(document.getElementById('notextdiv').value);
		//alert("hello");
		if(document.getElementById('notextdiv').value!='')
		{
		var adddivid=document.getElementById('notextdiv').value+","+dragid;
		document.getElementById('notextdiv').value=adddivid;
		}
		else
		{
			document.getElementById('notextdiv').value=dragid;
		}
		
		
	for(var i=0; i<colCount; i++) {
		
		var newcell = row.insertCell(i);
		
		arrlen = captionater.length;
		
		
		
		if(i == 0) { 
			newcell.className = "builder_tab_tit";
			newcell.width = "110";
			newcell.valign = "top";
			newcell.align = "center";
			newcell.innerHTML = 'Caption '+dragid+':<br /><a id="'+dragid+'" href="javascript:void(0);" onclick="deleteRow(\''+dragid+'\')"><div class="builder_cancel">X</div></a>';
		} else {


			colomn2 = '<div><textarea cols="25" name="memetext[]" id="txtnew'+dragid+'" rows="5" onkeyup="onKeyDown(this.value, \'text'+dragid+'\');">Caption</textarea></div>';
			
			colomn2 += "<div style='float:left; width:200px;'>";
			colomn2 += '<select name="txtfont[]" id="txtfont'+dragid+'" onchange="font_size(this.value,\'text'+dragid+'\');">';
			//alert(fontsizeval);
			if(fontsizeval==18)
			{
			colomn2 += "<option value='18px' selected='selected'>Size: 18px</option>";
			}
			else
			{
			colomn2 += "<option value='18px'>Size: 18px</option>";
			}
			if(fontsizeval==20)
			{
			colomn2 += "<option value='20px' selected='selected'>Size: 20px</option>";
			}
			else
			{
			colomn2 += "<option value='20px'>Size: 20px</option>";
			}
			if(fontsizeval==22)
			{
			colomn2 += "<option value='22px' selected='selected'>Size: 22px</option>";
			}
			else
			{
			colomn2 += "<option value='22px'>Size: 22px</option>";
			}
			if(fontsizeval==24)
			{
			colomn2 += "<option value='24px' selected='selected'>Size: 24px</option>";
			}
			else
			{
			colomn2 += "<option value='24px'>Size: 24px</option>";
			}
			if(fontsizeval==26)
			{
			colomn2 += "<option value='26px' selected='selected'>Size: 26px</option>";
			}
			else
			{
			colomn2 += "<option value='26px'>Size: 26px</option>";
			}
			if(fontsizeval==36)
			{
			colomn2 += "<option value='36px' selected='selected'>Size: 36px</option>";
			}
			else
			{
			colomn2 += "<option value='36px'>Size: 36px</option>";
			}
			if(fontsizeval==46)
			{
			colomn2 += "<option value='46px' selected='selected'>Size: 46px</option>";
			}
			else
			{
			colomn2 += "<option value='46px'>Size: 46px</option>";
			}
			if(fontsizeval==56)
			{
			colomn2 += "<option value='56px' selected='selected'>Size: 56px</option>";
			}
			else
			{
			colomn2 += "<option value='56px'>Size: 56px</option>";
			}
			if(fontsizeval==66)
			{
			colomn2 += "<option value='66px' selected='selected'>Size: 66px</option>";
			}
			else
			{
			colomn2 += "<option value='66px'>Size: 66px</option>";
			}
			if(fontsizeval==76)
			{
			colomn2 += "<option value='76px' selected='selected'>Size: 76px</option>";
			}
			else
			{
			colomn2 += "<option value='76px'>Size: 76px</option>";
			}
			
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			newcell.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
	
		}
	}
		var captions = document.getElementById('containment-wrapper');
	//alert(captions);
	var newcaption = document.createElement('div');
	
	newcaption.setAttribute("id","draggable"+dragid);
	newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
	//alert(colorval);
	newcaption.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; font-family:"+ffamily+"; font-size:"+fontsizeval+"px; color:"+colorval+"; width:"+divwidth+"px; height:"+divheight+"px;");
	//newcaption.setAttribute("style","text-align:left;");
	
	newcaption.innerHTML = "<span id='text"+dragid+"' >Caption</span>";
	
	captions.appendChild( newcaption );
	

	$( "#draggable"+dragid).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable"+dragid).resizable({
		containment: "#containment-wrapper"
	});
	
	}
	
	/*document.getElementById('text'+dragid).style.color=colorval;
	document.getElementById('textnew_color').value=colorval;*/
/*	$( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable1" ).resizable({
		containment: "#containment-wrapper"
	});*/
	
	}
	


function deleteRow(captioncount) {
	//alert(captioncount);
	try {
	var table = document.getElementById("captioner");
	var rowCount = table.rows.length;
	var newstr;
	var mixxstr=document.getElementById('notextdiv').value.split(",");
	var q=1;
	var tempstr='';
	for(newstr in mixxstr)
	{
	if(captioncount!=mixxstr[newstr])
	{
		tempstr+=mixxstr[newstr]+",";
		//alert(mixxstr[newstr]);
	}
	}
	
	document.getElementById('notextdiv').value=tempstr;
	
	//table.deleteRow(i);
	
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[2];
		
		//alert(chkbox.id);
		
		if(chkbox.id == captioncount)
		{
			table.deleteRow(i); 
			var captions_del = document.getElementById("draggable"+chkbox.id);
			document.getElementById('containment-wrapper').removeChild(captions_del)
		}
	}
	}catch(e) {
		//alert(e);
	}
}












// JavaScript Document

var captioner2 = 1;


$(function() {
	$( "#draggable21" ).draggable({ containment: "#containment-wrapper2", scroll: false });
	$( "#draggable22" ).draggable({ containment: "#containment-wrapper2", scroll: false });
});


$(function() {
	$( "#draggable21" ).resizable({
		containment: "#containment-wrapper2"
	});
	$( "#draggable22" ).resizable({
		containment: "#containment-wrapper2"
	});
});




function onKeyDown2(divele,changeid)
{
	//alert(document.getElementById(changeid).innerHTML);
	document.getElementById(changeid).innerHTML=divele;
}

function build_meme(x)
{
	//var =document.getElementById('src_img');
	var y=document.getElementById('wraper_img2');
	//alert(x.getAttribute("src"));
	var z=x.getAttribute("src");
	y.setAttribute("src", z);
	document.getElementById('imgid2').value=z;
}

function change_color2(clr)
{
	//alert(clr);
	
	
	var colordiv = clr.innerHTML;
	document.getElementById('textnew_color2').value=colordiv;
	var ntxtval=document.getElementById('notextdiv2').value.split(",");
	if(document.getElementById('notextdiv2').value!='')
	{
	for(nval in ntxtval)
	{
	if(ntxtval[nval]!='')
	{
	document.getElementById('text2'+ntxtval[nval]).style.color=colordiv;
	}
	}
	}
	//alert(colordiv);
	$(".draggable2").css('color', colordiv);
}

function change_color_input2(clr)
{
	//alert(clr);
/*	var colordiv = clr.innerHTML;
	alert(colordiv);*/
	document.getElementById('textnew_color2').value="#"+clr;
	
	var ntxtval=document.getElementById('notextdiv2').value.split(",");
	if(document.getElementById('notextdiv2').value!='')
	{
	for(nval in ntxtval)
	{
	if(ntxtval[nval]!='')
	{
	document.getElementById('text2'+ntxtval[nval]).style.color="#"+clr;
	}
	}
	}
	
	
	$(".draggable2").css('color', "#"+clr);
}

/*function font_change(txt)
{
	$(".draggable2").css('font-family', txt);
}*/

function font_size(size,txtid)
{
	//alert(size);
	//alert("#"+txtid);
	$("#"+txtid).css('font-size', size);
}

function font_align(alignment,txtid,texarea_id)
{
	//alert(alignment);
	//alert("#"+txtid);
	switch(alignment)
	{
		case 'left':
			$("#"+txtid).css('text-align', 'left');
			document.getElementById(texarea_id).style.textAlign="left";
			break;
		
		case 'center':
			$("#"+txtid).css('text-align', 'center');
			document.getElementById(texarea_id).style.textAlign="center";
			break;
			
		case 'right':
			$("#"+txtid).css('text-align', 'right');
			document.getElementById(texarea_id).style.textAlign="right";
			break;
			
		case 'justify':
			$("#"+txtid).css('text-align', 'justify');
			document.getElementById(texarea_id).style.textAlign="justify";
			break;
	
	}
}



//---------- create caption -----------//

var captionater2 = new Array();
var colomn2 = "";

function addRow2(textval,colorval,fontsizeval,dragid2,leftalign,rightalign,ffamily,divwidth,divheight) {
	
	var tableID2 = "captioner2";//alert(fontsizeval);
	if(fontsizeval=='rg' || fontsizeval=='')
	{
		fontsizeval="36";
	}
	//alert(divwidth);
	/*if(textval=='Enter here to make meme')
	{
		textval='';
		newtextval="Enter here to make meme";
	}
	else
	{
		newtextval=textval;
	}*/
	var table2 = document.getElementById(tableID2);
    var rowCount2 = table2.rows.length;
	//alert("Rows = "+rowCount);
	var colCount2 = 2;
	
	//alert("Colomns = "+colCount);
	var row2 = table2.insertRow(rowCount2);
	
	var arrlen2 = captionater2.length;
	
	//alert(arrlen);
	
	//alert(captionater[0]);
	
	captionater2[arrlen2]=arrlen2+1;
		
	
	
	if(dragid2=='null')
	{
		
		
		
		
			for(var i=0; i<colCount2; i++) {
		
		var newcell2 = row2.insertCell(i);
		
		if(i==1)
		{
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv2').value!='')
		{
			
		var adddivid2=document.getElementById('notextdiv2').value+","+captionater2[arrlen2-1];
		document.getElementById('notextdiv2').value=adddivid2;
		}
		else
		{
			document.getElementById('notextdiv2').value=captionater2[arrlen2-1];
		}
		
		}
		arrlen2 = captionater2.length;
		//alert(captionater[arrlen-1]);
		
		if(i == 0) { 
			newcell2.className = "builder_tab_tit";
			newcell2.width = "110";
			newcell2.valign = "top";
			newcell2.align = "center";
			newcell2.innerHTML = 'Caption '+captionater2[arrlen2-1]+':<br /><a id="'+captionater2[arrlen2-1]+'" href="javascript:void(0);" onclick="deleteRow2(\''+captionater2[arrlen2-1]+'\')"><div class="builder_cancel">X</div></a>';
		} else {
			colomn2 = '<div><input type="text" name="memetext2[]" id="txtnew2'+captionater2[arrlen2-1]+'" onkeyup="onKeyDown2(this.value, \'text2'+captionater2[arrlen2-1]+'\');" Value="'+textval+'" /></div>';
			
			colomn2 += "<div style='float:left; width:200px; margin-top:5px;'>";
			colomn2 += '<select name="txtfont2[]" id="txtfont2'+captionater2[arrlen2-1]+'" onchange="font_size(this.value,\'text2'+captionater2[arrlen2-1]+'\');">';
			if(fontsizeval==18)
			{
			colomn2 += "<option value='18px' selected='selected'>Size: 18px</option>";
			}
			else
			{
			colomn2 += "<option value='18px'>Size: 18px</option>";
			}
			if(fontsizeval==20)
			{
			colomn2 += "<option value='20px' selected='selected'>Size: 20px</option>";
			}
			else
			{
			colomn2 += "<option value='20px'>Size: 20px</option>";
			}
			if(fontsizeval==22)
			{
			colomn2 += "<option value='22px' selected='selected'>Size: 22px</option>";
			}
			else
			{
			colomn2 += "<option value='22px'>Size: 22px</option>";
			}
			if(fontsizeval==24)
			{
			colomn2 += "<option value='24px' selected='selected'>Size: 24px</option>";
			}
			else
			{
			colomn2 += "<option value='24px'>Size: 24px</option>";
			}
			if(fontsizeval==26)
			{
			colomn2 += "<option value='26px' selected='selected'>Size: 26px</option>";
			}
			else
			{
			colomn2 += "<option value='26px'>Size: 26px</option>";
			}
			if(fontsizeval==36)
			{
			colomn2 += "<option value='36px' selected='selected'>Size: 36px</option>";
			}
			else
			{
			colomn2 += "<option value='36px'>Size: 36px</option>";
			}
			if(fontsizeval==46)
			{
			colomn2 += "<option value='46px' selected='selected'>Size: 46px</option>";
			}
			else
			{
			colomn2 += "<option value='46px'>Size: 46px</option>";
			}
			if(fontsizeval==56)
			{
			colomn2 += "<option value='56px' selected='selected'>Size: 56px</option>";
			}
			else
			{
			colomn2 += "<option value='56px'>Size: 56px</option>";
			}
			if(fontsizeval==66)
			{
			colomn2 += "<option value='66px' selected='selected'>Size: 66px</option>";
			}
			else
			{
			colomn2 += "<option value='66px'>Size: 66px</option>";
			}
			if(fontsizeval==76)
			{
			colomn2 += "<option value='76px' selected='selected'>Size: 76px</option>";
			}
			else
			{
			colomn2 += "<option value='76px'>Size: 76px</option>";
			}
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			newcell2.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
		}
	}
	
	
		
	
	var captions2 = document.getElementById('containment-wrapper2');
	//alert(captions);
	var newcaption2 = document.createElement('div');
	
	newcaption2.setAttribute("id","draggable2"+captionater2[arrlen2-1]);
	newcaption2.setAttribute("class","draggable ui-state-active ui-widget-content");
	
	if(captionater2[arrlen2-1] == 1) {
		newcaption2.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; width:"+divwidth+"px; font-size:"+fontsizeval+"px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption2.innerHTML = "<span id='text2"+captionater2[arrlen2-1]+"'>"+textval+"</span>";
	} else if(captionater2[arrlen2-1] == 2) {
		newcaption2.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; width:"+divwidth+"px; font-size:"+fontsizeval+"px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption2.innerHTML = "<span id='text2"+captionater2[arrlen2-1]+"'>"+textval+"</span>";
	} else {
		newcaption2.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; width:"+divwidth+"px; font-size:"+fontsizeval+"px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption2.innerHTML = "<span id='text2"+captionater2[arrlen2-1]+"'>"+textval+"</span>";
	}
	//newcaption.setAttribute("style","text-align:left;");
	
	//newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>Enter here to make meme</span>";
	
	captions2.appendChild( newcaption2 );
	

	$( "#draggable2"+captionater2[arrlen2-1] ).draggable({ containment: "#containment-wrapper2", scroll: false });
	
	$( "#draggable2"+captionater2[arrlen2-1] ).resizable({
		containment: "#containment-wrapper2"
	});
	
	
	}
	
	else
	{
		
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv2').value!='')
		{
		var adddivid2=document.getElementById('notextdiv2').value+","+dragid2;
		document.getElementById('notextdiv2').value=adddivid2;
		}
		else
		{
			document.getElementById('notextdiv2').value=dragid2;
		}
		
		
	for(var i=0; i<colCount2; i++) {
		
		var newcell2 = row2.insertCell(i);
		
		arrlen2 = captionater2.length;
		
		
		
		if(i == 0) { 
			newcell2.className = "builder_tab_tit";
			newcell2.width = "110";
			newcell2.valign = "top";
			newcell2.align = "center";
			newcell2.innerHTML = 'Caption '+dragid2+':<br /><a id="'+dragid2+'" href="javascript:void(0);" onclick="deleteRow(\''+dragid2+'\')"><div class="builder_cancel">X</div></a>';
		} else {


			colomn2 = '<div><textarea cols="25" name="memetext2[]" id="txtnew2'+dragid2+'" rows="5" onkeyup="onKeyDown2(this.value, \'text2'+dragid2+'\');">'+textval+'</textarea></div>';
			
			colomn2 += "<div style='float:left; width:200px;'>";
			colomn2 += '<select name="txtfont2[]" id="txtfont2'+dragid2+'" onchange="font_size(this.value,\'text2'+dragid2+'\');">';
			//alert(fontsizeval);
			if(fontsizeval==18)
			{
			colomn2 += "<option value='18px' selected='selected'>Size: 18px</option>";
			}
			else
			{
			colomn2 += "<option value='18px'>Size: 18px</option>";
			}
			if(fontsizeval==20)
			{
			colomn2 += "<option value='20px' selected='selected'>Size: 20px</option>";
			}
			else
			{
			colomn2 += "<option value='20px'>Size: 20px</option>";
			}
			if(fontsizeval==22)
			{
			colomn2 += "<option value='22px' selected='selected'>Size: 22px</option>";
			}
			else
			{
			colomn2 += "<option value='22px'>Size: 22px</option>";
			}
			if(fontsizeval==24)
			{
			colomn2 += "<option value='24px' selected='selected'>Size: 24px</option>";
			}
			else
			{
			colomn2 += "<option value='24px'>Size: 24px</option>";
			}
			if(fontsizeval==26)
			{
			colomn2 += "<option value='26px' selected='selected'>Size: 26px</option>";
			}
			else
			{
			colomn2 += "<option value='26px'>Size: 26px</option>";
			}
			if(fontsizeval==36)
			{
			colomn2 += "<option value='36px' selected='selected'>Size: 36px</option>";
			}
			else
			{
			colomn2 += "<option value='36px'>Size: 36px</option>";
			}
			if(fontsizeval==46)
			{
			colomn2 += "<option value='46px' selected='selected'>Size: 46px</option>";
			}
			else
			{
			colomn2 += "<option value='46px'>Size: 46px</option>";
			}
			if(fontsizeval==56)
			{
			colomn2 += "<option value='56px' selected='selected'>Size: 56px</option>";
			}
			else
			{
			colomn2 += "<option value='56px'>Size: 56px</option>";
			}
			if(fontsizeval==66)
			{
			colomn2 += "<option value='66px' selected='selected'>Size: 66px</option>";
			}
			else
			{
			colomn2 += "<option value='66px'>Size: 66px</option>";
			}
			if(fontsizeval==76)
			{
			colomn2 += "<option value='76px' selected='selected'>Size: 76px</option>";
			}
			else
			{
			colomn2 += "<option value='76px'>Size: 76px</option>";
			}
			
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			newcell2.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
	
		}
	}
		var captions2 = document.getElementById('containment-wrapper2');
	//alert(captions);
	var newcaption2 = document.createElement('div');
	
	newcaption2.setAttribute("id","draggable2"+dragid2);
	newcaption2.setAttribute("class","draggable ui-state-active ui-widget-content");
	//alert(colorval);
	newcaption2.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; font-family:"+ffamily+"; font-size:"+fontsizeval+"px; color:"+colorval+"; width:"+divwidth+"px; height:"+divheight+"px;");
	//newcaption.setAttribute("style","text-align:left;");
	
	newcaption2.innerHTML = "<span id='text"+dragid2+"' >"+textval+"</span>";
	
	captions2.appendChild( newcaption2 );
	

	$( "#draggable2"+dragid2).draggable({ containment: "#containment-wrapper2", scroll: false });
	
	$( "#draggable2"+dragid2).resizable({
		containment: "#containment-wrapper2"
	});
	
	}
	
	/*document.getElementById('text'+dragid).style.color=colorval;
	document.getElementById('textnew_color').value=colorval;*/
/*	$( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable1" ).resizable({
		containment: "#containment-wrapper"
	});*/
	
	}
	


function deleteRow2(captioncount) {
	//alert(captioncount);
	try {
	var table2 = document.getElementById("captioner2");
	var rowCount2 = table2.rows.length;
	var newstr;
	var mixxstr=document.getElementById('notextdiv2').value.split(",");
	var q=1;
	var tempstr='';
	for(newstr in mixxstr)
	{
	if(captioncount!=mixxstr[newstr])
	{
		tempstr+=mixxstr[newstr]+",";
		//alert(mixxstr[newstr]);
	}
	}
	
	document.getElementById('notextdiv2').value=tempstr;
	
	//table.deleteRow(i);
	
	for(var i=0; i<rowCount2; i++) {
		var row2 = table2.rows[i];
		var chkbox = row2.cells[0].childNodes[2];
		
		//alert(chkbox.id);
		
		if(chkbox.id == captioncount)
		{
			table2.deleteRow(i); 
			var captions_del = document.getElementById("draggable2"+chkbox.id);
			document.getElementById('containment-wrapper2').removeChild(captions_del)
		}
	}
	}catch(e) {
		//alert(e);
	}
}


function addimage(textval,colorval,fontsizeval,dragid,leftalign,rightalign,ffamily,divwidth,divheight)
{
	
	
	var tableID = "captioner";//alert(fontsizeval);
	if(fontsizeval=='rg' || fontsizeval=='')
	{
		fontsizeval="36";
	}
	//alert(divwidth);
	/*if(textval=='Enter here to make meme')
	{
		textval='';
		newtextval="Enter here to make meme";
	}
	else
	{
		newtextval=textval;
	}*/
	var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
	//alert("Rows = "+rowCount);
	var colCount = 2;
	
	//alert("Colomns = "+colCount);
	var row = table.insertRow(rowCount);
	
	var arrlen = captionater.length;
	
	//alert(arrlen);
	
	//alert(captionater[0]);
	
	captionater[arrlen]=arrlen+1;
		
	//alert(captionater[arrlen]);
	
/*	for(var i=0; i<colCount; i++) {
		
		var newcell = row.insertCell(i);
		
		arrlen = captionater.length;
		
		if(i == 0) { 
			newcell.className = "builder_tab_tit";
			newcell.width = "110";
			newcell.valign = "top";
			newcell.align = "center";
			newcell.innerHTML = 'Caption '+captionater[arrlen-1]+':<br /><a id="'+captionater[arrlen-1]+'" href="javascript:void(0);" onclick="deleteRow(\''+captionater[arrlen-1]+'\')"><div class="builder_cancel">X</div></a>';
		} else {
			colomn2 = '<div><textarea cols="25" name="memetext[]" rows="5" onkeyup="onKeyDown(this.value, \'text'+captionater[arrlen-1]+'\');">Enter here to make meme</textarea></div>';
			
			colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtfont'+captionater[arrlen-1]+'" id="txtfont'+captionater[arrlen-1]+'" onchange="font_size(this.value,\'text'+captionater[arrlen-1]+'\');">';
			colomn2 += "<option value='18px'>Size: 18px</option>";
			colomn2 += "<option value='20px'>Size: 20px</option>";
			colomn2 += "<option value='22px'>Size: 22px</option>";
			colomn2 += "<option value='24px'>Size: 24px</option>";
			colomn2 += "<option value='26px'>Size: 26px</option>";
			colomn2 += "<option selected='selected' value='36px'>Size: 36px</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign'+captionater[arrlen-1]+'" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			//alert(colomn2);
			
			newcell.innerHTML = colomn2;
		}
	}*/
	
	

	
	
	
	if(dragid=='null')
	{
		
		
		//alert();
		
			for(var i=0; i<colCount; i++) {
		
		var newcell = row.insertCell(i);
		
		if(i==1)
		{
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv').value!='')
		{
			
		var adddivid=document.getElementById('notextdiv').value+","+captionater[arrlen-1];
		document.getElementById('notextdiv').value=adddivid;
		}
		else
		{
			document.getElementById('notextdiv').value=captionater[arrlen-1];
		}
		
		}
		arrlen = captionater.length;
		//alert(captionater[arrlen-1]);
		
		if(i == 0) { 
		//alert(i);
			newcell.className = "builder_tab_tit";
			newcell.width = "110";
			newcell.valign = "top";
			newcell.align = "center";
			newcell.innerHTML = 'Image '+captionater[arrlen-1]+':<br /><a id="'+captionater[arrlen-1]+'" href="javascript:void(0);" onclick="deleteRow(\''+captionater[arrlen-1]+'\')"><div class="builder_cancel">X</div></a>';
		} else {
			//colomn2 = '<div><textarea cols="25" name="memetext[]" id="txtnew'+captionater[arrlen-1]+'" rows="5" onkeyup="onKeyDown(this.value, \'text'+captionater[arrlen-1]+'\');">Caption</textarea></div>';
			
			/*colomn2 += "<div style='float:left; width:200px;'>";
			colomn2 += '<select name="txtwidth[]" id="txtwidth'+captionater[arrlen-1]+'" onchange="img_size(this.value,\'img'+captionater[arrlen-1]+'\');">';
			colomn2 += "<option value='50px'>Width: 50px</option>";
			colomn2 += "<option value='60px'>Width: 60px</option>";
			colomn2 += "<option value='70px'>Width: 70px</option>";
			colomn2 += "<option value='90px'>Width: 90px</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			//newcell.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
		}
	}
		
	
	var captions = document.getElementById('containment-wrapper');
	//alert(captions);
	var newcaption = document.createElement('div');
	
	newcaption.setAttribute("id","draggabled");
	newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
	
	if(captionater[arrlen-1] == 1) {
		newcaption.setAttribute("style","left:130px; top:50px; text-align:left; width:150px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>Hello</span>";
	} else if(captionater[arrlen-1] == 2) {
		newcaption.setAttribute("style","left:130px; top:200px; text-align:left; width:150px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>hello</span>";
	} else {
		newcaption.setAttribute("style","left:0px; top:100px; width:50px; text-align:left; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'><img id='img1' src=images/star.gif /></span>";
		
	}
	
	//newcaption.setAttribute("style","text-align:left;");
	
	//newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>Enter here to make meme</span>";
	//alert(newcaption.innerHTML );	
	captions.appendChild( newcaption );
	
	//alert(caption.innerHTML);

	$( "#draggabled" ).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggabled").resizable({containment: "#containment-wrapper"});
	//$( "#img1" ).draggable({ containment: "#containment-wrapper", scroll: false });
	$( "#img1" ).resizable({containment: "#containment-wrapper"});
	
	$( "#upimg1" ).resizable({containment: "#containment-wrapper"});
	
	$( "#upimg2" ).resizable({containment: "#containment-wrapper2"});
	
	$( "#backimg" ).resizable({containment: "#containment-wrapper2"});

	
	
	}
	
	else
	{
		//alert(dragid);
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv').value!='')
		{
		var adddivid=document.getElementById('notextdiv').value+","+dragid;
		document.getElementById('notextdiv').value=adddivid;
		}
		else
		{
			document.getElementById('notextdiv').value=dragid;
		}
		
		
	for(var i=0; i<colCount; i++) {
		
		var newcell = row.insertCell(i);
		
		arrlen = captionater.length;
		
		
		
		if(i == 0) { 
			newcell.className = "builder_tab_tit";
			newcell.width = "110";
			newcell.valign = "top";
			newcell.align = "center";
			newcell.innerHTML = 'Caption '+dragid+':<br /><a id="'+dragid+'" href="javascript:void(0);" onclick="deleteRow(\''+dragid+'\')"><div class="builder_cancel">X</div></a>';
		} else {


			colomn2 = '<div><textarea cols="25" name="memetext[]" id="txtnew'+dragid+'" rows="5" onkeyup="onKeyDown(this.value, \'text'+dragid+'\');">Caption</textarea></div>';
			
			
			colomn2 += "<div style='float:left; width:200px;'>";
			colomn2 += '<select name="txtfont[]" id="txtfont'+dragid+'" onchange="font_size(this.value,\'text'+dragid+'\');">';
			//alert(fontsizeval);
			if(fontsizeval==18)
			{
			colomn2 += "<option value='18px' selected='selected'>Size: 18px</option>";
			}
			else
			{
			colomn2 += "<option value='18px'>Size: 18px</option>";
			}
			if(fontsizeval==20)
			{
			colomn2 += "<option value='20px' selected='selected'>Size: 20px</option>";
			}
			else
			{
			colomn2 += "<option value='20px'>Size: 20px</option>";
			}
			if(fontsizeval==22)
			{
			colomn2 += "<option value='22px' selected='selected'>Size: 22px</option>";
			}
			else
			{
			colomn2 += "<option value='22px'>Size: 22px</option>";
			}
			if(fontsizeval==24)
			{
			colomn2 += "<option value='24px' selected='selected'>Size: 24px</option>";
			}
			else
			{
			colomn2 += "<option value='24px'>Size: 24px</option>";
			}
			if(fontsizeval==26)
			{
			colomn2 += "<option value='26px' selected='selected'>Size: 26px</option>";
			}
			else
			{
			colomn2 += "<option value='26px'>Size: 26px</option>";
			}
			if(fontsizeval==36)
			{
			colomn2 += "<option value='36px' selected='selected'>Size: 36px</option>";
			}
			else
			{
			colomn2 += "<option value='36px'>Size: 36px</option>";
			}
			if(fontsizeval==46)
			{
			colomn2 += "<option value='46px' selected='selected'>Size: 46px</option>";
			}
			else
			{
			colomn2 += "<option value='46px'>Size: 46px</option>";
			}
			if(fontsizeval==56)
			{
			colomn2 += "<option value='56px' selected='selected'>Size: 56px</option>";
			}
			else
			{
			colomn2 += "<option value='56px'>Size: 56px</option>";
			}
			if(fontsizeval==66)
			{
			colomn2 += "<option value='66px' selected='selected'>Size: 66px</option>";
			}
			else
			{
			colomn2 += "<option value='66px'>Size: 66px</option>";
			}
			if(fontsizeval==76)
			{
			colomn2 += "<option value='76px' selected='selected'>Size: 76px</option>";
			}
			else
			{
			colomn2 += "<option value='76px'>Size: 76px</option>";
			}
			
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			//newcell.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
	
		}
	}
		var captions = document.getElementById('containment-wrapper');
	//alert(captions);
	var newcaption = document.createElement('div');
	
	newcaption.setAttribute("id","draggable"+dragid);
	newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
	//alert(colorval);
	newcaption.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; font-family:"+ffamily+"; font-size:"+fontsizeval+"px; color:"+colorval+"; width:"+divwidth+"px; height:"+divheight+"px;");
	//newcaption.setAttribute("style","text-align:left;");
	
	newcaption.innerHTML = "<span id='text"+dragid+"' >hgfh</span>";
	
	captions.appendChild( newcaption );
	

	$( "#draggable"+dragid).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable"+dragid).resizable({containment: "#containment-wrapper"});
	$( "#imge").resizable({containment: "#containment-wrapper"});
	
	}
	
	
	/*document.getElementById('text'+dragid).style.color=colorval;
	document.getElementById('textnew_color').value=colorval;*/
/*	$( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable1" ).resizable({
		containment: "#containment-wrapper"
	});*/
	
	
}

function addimage3(fileName)
{
	//alert(fileName);
	var captions = document.getElementById('containment-wrapper');
	if(fileName != "Delete")
	{
		//alert("no");
		if(document.getElementById("img1") == null)
		{
			//alert(fileName);
			var newcaption = document.createElement('div');
			newcaption.setAttribute("id","draggabled1");
			newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
			newcaption.setAttribute("style","left:180px; top:160px; width:100px;  text-align:left;");
			newcaption.innerHTML = "<span ><img id='img1' src='"+fileName+"' width=100px  /></span><input type='hidden' value='"+fileName+"' id='img1_name1' name='img1_name1' />";
			captions.appendChild( newcaption );
			document.getElementById("img1_name").value=fileName;
		}
		else
		{
			//alert("change");
			document.getElementById("img1").src=fileName;
			document.getElementById("img1_name").value=fileName;
		}
		
			
		$( "#draggabled1" ).draggable({ containment: "#containment-wrapper", scroll: false });
		$( "#draggabled1").resizable({containment: "#containment-wrapper"});
		$( "#img1" ).resizable({containment: "#containment-wrapper"});
		
	
	}
	else
	{
		//alert("yes");
		if(document.getElementById("img1") != null)
		{ 
			//alert("hello");
			var ele =document.getElementById('draggabled1');
			captions.removeChild(ele);
		}
		
	}
}


function addimage4(fileName)
{
	
	
	var captions = document.getElementById('containment-wrapper2');
	if(fileName != "Delete")
	{
		//alert(document.getElementById("backimg"));
		
		if(document.getElementById("backimg") == null)
		{
			
			var newcaption = document.createElement('div');
			newcaption.setAttribute("id","draggabled2");
			newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
			newcaption.setAttribute("style","left:180px; top:160px; width:50px; text-align:left;");
			newcaption.innerHTML = "<span ><img id='backimg' src='"+fileName+"' width=100px /></span><input type='hidden' value='"+fileName+"' id='backimg_name1' name='backimg_name1' />";
			captions.appendChild( newcaption );
			document.getElementById("backimg_name").value=fileName;	
		}
		else
		{
			document.getElementById("backimg").src=fileName;
			document.getElementById("backimg_name").value=fileName;	
		}
		
		$( "#draggabled2" ).draggable({ containment: "#containment-wrapper2", scroll: false });
		$( "#draggabled2").resizable({containment: "#containment-wrapper2"});
		$( "#backimg" ).resizable({containment: "#containment-wrapper2"});
		
	}
	else
	{
		if(document.getElementById("backimg") != null)
		{ 
			//alert("hello");
			var ele =document.getElementById('draggabled2');
			captions.removeChild(ele);
		}
	}
}



function addimage_uploaded(fileName)
{
	
	var captions = document.getElementById('containment-wrapper');
	if(fileName != "Delete")
	{
		//alert(document.getElementById("upimg1"));
		if(document.getElementById("upimg1") == null)
		{
			//alert(fileName);
			var newcaption = document.createElement('div');
			newcaption.setAttribute("id","draggableup1");
			newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
			newcaption.setAttribute("style","left:180px; top:160px; width:100px;  text-align:left;");
			newcaption.innerHTML = "<span ><img id='upimg1' src='"+fileName+"' width=100px height=100px  /></span><input type='hidden' value='"+fileName+"' id='upimg1_name1' name='upimg1_name1' />";
			captions.appendChild( newcaption );
			document.getElementById("upimg1_name").value=fileName;
		}
		else
		{
			//alert("change");
			document.getElementById("upimg1").src=fileName;
			document.getElementById("upimg1_name").value=fileName;
		}
		
			
		$( "#draggableup1" ).draggable({ containment: "#containment-wrapper", scroll: false });
		$( "#draggableup1").resizable({containment: "#containment-wrapper"});
		$( "#upimg1" ).resizable({containment: "#containment-wrapper"});
	}
	else
	{
		//alert("yes");
		if(document.getElementById("upimg1") != null)
		{ 
			//alert("hello");
			var ele =document.getElementById('draggableup1');
			captions.removeChild(ele);
		}
		
	}
}


function addimage_uploaded1(fileName)
{
	
	var captions = document.getElementById('containment-wrapper2');
	if(fileName != "Delete")
	{
		//alert(document.getElementById("upimg1"));
		if(document.getElementById("upimg2") == null)
		{
			//alert(fileName);
			var newcaption = document.createElement('div');
			newcaption.setAttribute("id","draggableup2");
			newcaption.setAttribute("class","draggable ui-state-active ui-widget-content");
			newcaption.setAttribute("style","left:180px; top:160px; width:100px;  text-align:left;");
			newcaption.innerHTML = "<span ><img id='upimg2' src='"+fileName+"' width=100px height=100px  /></span><input type='hidden' value='"+fileName+"' id='upimg2_name1' name='upimg2_name1' />";
			captions.appendChild( newcaption );
			document.getElementById("upimg2_name").value=fileName;
		}
		else
		{
			//alert("change");
			document.getElementById("upimg2").src=fileName;
			document.getElementById("upimg2_name").value=fileName;
		}
		
			
		$( "#draggableup2" ).draggable({ containment: "#containment-wrapper2", scroll: false });
		$( "#draggableup2").resizable({containment: "#containment-wrapper2"});
		$( "#upimg2" ).resizable({containment: "#containment-wrapper2"});
	}
	else
	{
		//alert("yes");
		if(document.getElementById("upimg2") != null)
		{ 
			//alert("hello");
			var ele =document.getElementById('draggableup2');
			captions.removeChild(ele);
		}
		
	}
}




function addimage2(textval,colorval,fontsizeval,dragid2,leftalign,rightalign,ffamily,divwidth,divheight) {
	
	var tableID2 = "captioner2";//alert(fontsizeval);
	if(fontsizeval=='rg' || fontsizeval=='')
	{
		fontsizeval="36";
	}
	//alert(divwidth);
	/*if(textval=='Enter here to make meme')
	{
		textval='';
		newtextval="Enter here to make meme";
	}
	else
	{
		newtextval=textval;
	}*/
	var table2 = document.getElementById(tableID2);
    var rowCount2 = table2.rows.length;
	//alert("Rows = "+rowCount);
	var colCount2 = 2;
	
	//alert("Colomns = "+colCount);
	var row2 = table2.insertRow(rowCount2);
	
	var arrlen2 = captionater2.length;
	
	//alert(arrlen);
	
	//alert(captionater[0]);
	
	captionater2[arrlen2]=arrlen2+1;
		
	
	
	if(dragid2=='null')
	{
		
		
		
		
			for(var i=0; i<colCount2; i++) {
		
		var newcell2 = row2.insertCell(i);
		
		if(i==1)
		{
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv2').value!='')
		{
			
		var adddivid2=document.getElementById('notextdiv2').value+","+captionater2[arrlen2-1];
		document.getElementById('notextdiv2').value=adddivid2;
		}
		else
		{
			document.getElementById('notextdiv2').value=captionater2[arrlen2-1];
		}
	
		
		}
		arrlen2 = captionater2.length;
		//alert(captionater[arrlen-1]);
		
		if(i == 0) { 
			newcell2.className = "builder_tab_tit";
			newcell2.width = "110";
			newcell2.valign = "top";
			newcell2.align = "center";
			newcell2.innerHTML = 'Caption '+captionater2[arrlen2-1]+':<br /><a id="'+captionater2[arrlen2-1]+'" href="javascript:void(0);" onclick="deleteRow2(\''+captionater2[arrlen2-1]+'\')"><div class="builder_cancel">X</div></a>';
		} else {
			colomn2 = '<div><textarea cols="25" name="memetext2[]" id="txtnew2'+captionater2[arrlen2-1]+'" rows="5" onkeyup="onKeyDown2(this.value, \'text2'+captionater2[arrlen2-1]+'\');">Caption</textarea></div>';
			
			colomn2 += "<div style='float:left; width:200px;'>";
			colomn2 += '<select name="txtfont2[]" id="txtfont2'+captionater2[arrlen2-1]+'" onchange="font_size(this.value,\'text2'+captionater2[arrlen2-1]+'\');">';
			colomn2 += "<option value='18px'>Size: 18px</option>";
			colomn2 += "<option value='20px'>Size: 20px</option>";
			colomn2 += "<option value='22px'>Size: 22px</option>";
			colomn2 += "<option value='24px'>Size: 24px</option>";
			colomn2 += "<option value='26px'>Size: 26px</option>";
			colomn2 += "<option selected='selected' value='36px'>Size: 36px</option>";
			colomn2 += "<option value='46px'>Size: 46px</option>";
			colomn2 += "<option value='56px'>Size: 56px</option>";
			colomn2 += "<option value='66px'>Size: 66px</option>";
			colomn2 += "<option value='76px'>Size: 76px</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			//newcell2.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
		}
	}
	
	
		
	
	var captions2 = document.getElementById('containment-wrapper2');
	
	var newcaption2 = document.createElement('div');
	
	newcaption2.setAttribute("id","draggable2"+captionater2[arrlen2-1]);
	newcaption2.setAttribute("class","draggable ui-state-active ui-widget-content");
	
	
	if(captionater2[arrlen2-1] == 1) {
		newcaption2.setAttribute("style","left:130px; top:50px; text-align:left; width:150px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption2.innerHTML = "<span id='text2"+captionater2[arrlen2-1]+"'>Caption</span>";
	} else if(captionater2[arrlen2-1] == 2) {
		newcaption2.setAttribute("style","left:130px; top:200px; text-align:left; width:150px; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption2.innerHTML = "<span id='text2"+captionater2[arrlen2-1]+"'>Caption</span>";
	} else {
		
		newcaption2.setAttribute("style","left:130px; top:100px; width:0px; text-align:left; color:"+colorval+"; font-family:"+ffamily+";");
		newcaption2.innerHTML = "<span id='text"+captionater2[arrlen2-1]+"'><img id='img2"+captionater2[arrlen2-1]+"' src=images/star.gif /></span>";
		
	}
	//newcaption.setAttribute("style","text-align:left;");
	
	//newcaption.innerHTML = "<span id='text"+captionater[arrlen-1]+"'>Enter here to make meme</span>";
	//alert(newcaption2.innerHTML);
	captions2.appendChild( newcaption2 );
	

	$( "#draggable2"+captionater2[arrlen2-1] ).draggable({ containment: "#containment-wrapper2", scroll: false });
	
	$( "#draggable2"+captionater2[arrlen2-1] ).resizable({containment: "#containment-wrapper2"});
	$( "#img2"+captionater2[arrlen2-1] ).resizable({containment: "#containment-wrapper2"});
	
	}
	
	else
	{
		
		//alert(document.getElementById('notextdiv').value);
		
		if(document.getElementById('notextdiv2').value!='')
		{
		var adddivid2=document.getElementById('notextdiv2').value+","+dragid2;
		document.getElementById('notextdiv2').value=adddivid2;
		}
		else
		{
			document.getElementById('notextdiv2').value=dragid2;
		}
		
		
	for(var i=0; i<colCount2; i++) {
		
		var newcell2 = row2.insertCell(i);
		
		arrlen2 = captionater2.length;
		
		
		
		if(i == 0) { 
			newcell2.className = "builder_tab_tit";
			newcell2.width = "110";
			newcell2.valign = "top";
			newcell2.align = "center";
			newcell2.innerHTML = 'Caption '+dragid2+':<br /><a id="'+dragid2+'" href="javascript:void(0);" onclick="deleteRow(\''+dragid2+'\')"><div class="builder_cancel">X</div></a>';
		} else {


			colomn2 = '<div><textarea cols="25" name="memetext2[]" id="txtnew2'+dragid2+'" rows="5" onkeyup="onKeyDown2(this.value, \'text2'+dragid2+'\');">'+textval+'</textarea></div>';
			
			colomn2 += "<div style='float:left; width:200px;'>";
			colomn2 += '<select name="txtfont2[]" id="txtfont2'+dragid2+'" onchange="font_size(this.value,\'text2'+dragid2+'\');">';
			//alert(fontsizeval);
			if(fontsizeval==18)
			{
			colomn2 += "<option value='18px' selected='selected'>Size: 18px</option>";
			}
			else
			{
			colomn2 += "<option value='18px'>Size: 18px</option>";
			}
			if(fontsizeval==20)
			{
			colomn2 += "<option value='20px' selected='selected'>Size: 20px</option>";
			}
			else
			{
			colomn2 += "<option value='20px'>Size: 20px</option>";
			}
			if(fontsizeval==22)
			{
			colomn2 += "<option value='22px' selected='selected'>Size: 22px</option>";
			}
			else
			{
			colomn2 += "<option value='22px'>Size: 22px</option>";
			}
			if(fontsizeval==24)
			{
			colomn2 += "<option value='24px' selected='selected'>Size: 24px</option>";
			}
			else
			{
			colomn2 += "<option value='24px'>Size: 24px</option>";
			}
			if(fontsizeval==26)
			{
			colomn2 += "<option value='26px' selected='selected'>Size: 26px</option>";
			}
			else
			{
			colomn2 += "<option value='26px'>Size: 26px</option>";
			}
			if(fontsizeval==36)
			{
			colomn2 += "<option value='36px' selected='selected'>Size: 36px</option>";
			}
			else
			{
			colomn2 += "<option value='36px'>Size: 36px</option>";
			}
			if(fontsizeval==46)
			{
			colomn2 += "<option value='46px' selected='selected'>Size: 46px</option>";
			}
			else
			{
			colomn2 += "<option value='46px'>Size: 46px</option>";
			}
			if(fontsizeval==56)
			{
			colomn2 += "<option value='56px' selected='selected'>Size: 56px</option>";
			}
			else
			{
			colomn2 += "<option value='56px'>Size: 56px</option>";
			}
			if(fontsizeval==66)
			{
			colomn2 += "<option value='66px' selected='selected'>Size: 66px</option>";
			}
			else
			{
			colomn2 += "<option value='66px'>Size: 66px</option>";
			}
			if(fontsizeval==76)
			{
			colomn2 += "<option value='76px' selected='selected'>Size: 76px</option>";
			}
			else
			{
			colomn2 += "<option value='76px'>Size: 76px</option>";
			}
			
			colomn2 += "</select>";
			colomn2 += "</div>";
			
			/*colomn2 += "<div style='float:left;'>";
			colomn2 += '<select name="txtalign[]" id="txtalign1" onchange="font_align(this.value,\'draggable'+captionater[arrlen-1]+'\',\'txtnew'+captionater[arrlen-1]+'\');" style="width:133px;">';
			colomn2 += "<option value='left'>Align: left</option>";
			colomn2 += "<option selected='selected' value='center'>Align: center</option>";
			colomn2 += "<option value='right'>Align: right</option>";
			colomn2 += "<option value='justify'>Align: justify</option>";
			colomn2 += "</select>";
			colomn2 += "</div>";*/
			
			//alert(colomn2);
			
			newcell2.innerHTML = colomn2;
			//document.getElementById('text'+captionater[arrlen-1]).style.textAlign="center";
	
		}
	}
		var captions2 = document.getElementById('containment-wrapper2');
	//alert(captions);
	var newcaption2 = document.createElement('div');
	
	newcaption2.setAttribute("id","draggable2"+dragid2);
	newcaption2.setAttribute("class","draggable ui-state-active ui-widget-content");
	//alert(colorval);
	newcaption2.setAttribute("style","left:"+leftalign+"px; top:"+rightalign+"px; text-align:left; font-family:"+ffamily+"; font-size:"+fontsizeval+"px; color:"+colorval+"; width:"+divwidth+"px; height:"+divheight+"px;");
	//newcaption.setAttribute("style","text-align:left;");
	
	newcaption2.innerHTML = "<span id='text"+dragid2+"' >"+textval+"</span>";
	
	captions2.appendChild( newcaption2 );
	

	$( "#draggable2"+dragid2).draggable({ containment: "#containment-wrapper2", scroll: false });
	
	$( "#draggable2"+dragid2).resizable({containment: "#containment-wrapper2"});
	$( "#img2"+dragid2).resizable({containment: "#containment-wrapper2"});
	}
	
	/*document.getElementById('text'+dragid).style.color=colorval;
	document.getElementById('textnew_color').value=colorval;*/
/*	$( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
	
	$( "#draggable1" ).resizable({
		containment: "#containment-wrapper"
	});*/
	
	}
	


function deleteRow2(captioncount) {
	//alert(captioncount);
	try {
	var table2 = document.getElementById("captioner2");
	var rowCount2 = table2.rows.length;
	var newstr;
	var mixxstr=document.getElementById('notextdiv2').value.split(",");
	var q=1;
	var tempstr='';
	for(newstr in mixxstr)
	{
	if(captioncount!=mixxstr[newstr])
	{
		tempstr+=mixxstr[newstr]+",";
		//alert(mixxstr[newstr]);
	}
	}
	
	document.getElementById('notextdiv2').value=tempstr;
	
	//table.deleteRow(i);
	
	for(var i=0; i<rowCount2; i++) {
		var row2 = table2.rows[i];
		var chkbox = row2.cells[0].childNodes[2];
		
		//alert(chkbox.id);
		
		if(chkbox.id == captioncount)
		{
			table2.deleteRow(i); 
			var captions_del = document.getElementById("draggable2"+chkbox.id);
			document.getElementById('containment-wrapper2').removeChild(captions_del)
		}
	}
	}catch(e) {
		//alert(e);
	}
}











