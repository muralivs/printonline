<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../../themes/base/jquery.ui.all.css">
	<script src="../../jquery-1.7.1.js"></script>
	<script src="../../ui/jquery.ui.core.js"></script>
	<script src="../../ui/jquery.ui.widget.js"></script>
	<script src="../../ui/jquery.ui.mouse.js"></script>
	<script src="../../ui/jquery.ui.draggable.js"></script>
	<link rel="stylesheet" href="../demos.css">
	<style>
	.draggable { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
	#draggable3 { cursor:move; }
	#containment-wrapper { width: 95%; height:150px; border:2px solid #ccc; padding: 10px; }
	#containment-wrapper div {
		cursor:move;
	}
	</style>
	<script>
	$(function() {
		$( "#draggable1" ).draggable({ containment: "#containment-wrapper", scroll: false });
		$( "#draggable2" ).draggable({ containment: "#containment-wrapper", scroll: false });
	});
	
	$("#new").click(function() {
  		alert("Handler for .click() called.");
	});
	
	
	function newdiv(idd) {
		//$(idd).draggable({ containment: "#containment-wrapper", scroll: false });
		alert(idd);
		$(function() {
			alert(idd);
			
			//$( "#draggable4" ).draggable({ containment: "#containment-wrapper", scroll: false });
		});
	}
	</script>
<script language="javascript">
function move() {
	var textval=document.getElementById('text1').value;
	document.getElementById('draggable3').innerHTML=textval;
}
var i=5;
function create_text() {
	var parent=document.getElementById('containment-wrapper');
	var ele=document.createElement('div');
	var divid="draggable"+i;
	ele.setAttribute("id", divid);
	ele.setAttribute("class", "draggable ui-widget-content");
	parent.appendChild(ele);
	//mydiv();
	//newdiv(divid);
	alert(divid);
	$( "#"+divid ).draggable({ containment: "#containment-wrapper", scroll: false });
	i++;
}
</script>
</head>

<body>
<div class="demo">
<div id="containment-wrapper">
<div id="draggable1" class="draggable ui-widget-content">
	<p>I'm contained within the box</p>
</div>
<div id="draggable2" class="draggable ui-widget-content">
	<p>I'm contained within the box</p>
</div>
</div>
</div>
<div>
<textarea name="text1" id="text1"></textarea>
<input type="button" name="pass" onclick="move();" id="pass" value="Pass" />
<input type="button" name="new" id="new" onclick="create_text();" value="Create text" />

</div>
</body>
</html>
