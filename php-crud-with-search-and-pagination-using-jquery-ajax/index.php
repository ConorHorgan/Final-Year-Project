<?php
?>
<html>
	<head>
	<title>PHP CRUD with Search and Pagination</title>
	<link href="/php-crud-with-search-and-pagination-using-jquery-ajax/style.css" type="text/css" rel="stylesheet" />	
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<script>
	/* global $ */
	function getresult(url) {    
	$.ajax({
		url: url,
		type: "POST",
		data:  {rowcount:$("#rowcount").val(),name:$("#name").val(),code:$("#code").val()},
		success: function(data){ $("#toys-grid").html(data); $('#add-form').hide();}
	   });
	}
	getresult("getresult.php");
	function add() {
	var valid = validate();
	if(valid) {
		$.ajax({
			url: "/php-crud-with-search-and-pagination-using-jquery-ajax/add.php",
			type: "POST",
			data:  {name:$("#add-name").val(),code:$("#add-code").val(),category:$("#category").val(),price:$("#price").val(),stock_count:$("#stock_count").val()},
			success: function(data){ getresult("getresult.php"); }
		   });
		}
	}
	function showEdit(id) {
		$.ajax({
			url: "show_edit.php?id="+id,
			type: "POST",
			success: function(data){ $("#toy-"+id).html(data); }
	   });
	}
	function edit(id) {
	var valid = validate();
	if(valid) {
		$.ajax({
			url: "edit.php?id="+id,
			type: "POST",
			data:  {name:$("#add-name").val(),code:$("#add-code").val(),category:$("#category").val(),price:$("#price").val(),stock_count:$("#stock_count").val()},
			success: function(data){ $("#toy-"+id).html(data); }
		   });
		}
	}	
	function del(id) {
	$.ajax({
		url: "delete.php?id="+id,
		type: "POST",
		success: function(data){ $("#toy-"+id).html(''); }
	   });
	}
	function validate() {
		var valid = true;	
		$(".demoInputBox").css('background-color','');
		$(".info").html('');
		
		if(!$("#add-name").val()) {
			$("#name-info").html("(required)");
			$("#add-name").css('background-color','#FFFFDF');
			valid = false;
		}
		if(!$("#add-code").val()) {
			$("#code-info").html("(required)");
			$("#add-code").css('background-color','#FFFFDF');
			valid = false;
		}
		if(!$("#category").val()) {
			$("#category-info").html("(required)");
			$("#category").css('background-color','#FFFFDF');
			valid = false;
		}
		if(!$("#price").val()) {
			$("#price-info").html("(required)");
			$("#price").css('background-color','#FFFFDF');
			valid = false;
		}	
		if(!$("#stock_count").val()) {
			$("#stock_count-info").html("(required)");
			$("#stock_count").css('background-color','#FFFFDF');
			valid = false;
		}	
		return valid;
	}
	</script>
	</head>
	<body>
		<h2>PHP CRUD with Search and Pagination</h2>
		<div style="text-align:right;margin:20px 0px 10px;">
		<a id="btnAddAction" onClick="$('#add-form').show();">Add New</a>
		</div>
		<div id="toys-grid">
			<input type="hidden" name="rowcount" id="rowcount" />					
		</div>
		<div id="add-form">
		<form name="frmToy" method="post" action="" id="frmToy">
		<div>
		<label style="padding-top:20px;">Name</label>
		<span id="name-info" class="info"></span><br/>
		<input type="text" name="name" id="add-name" class="demoInputBox">
		</div>
		<div>
		<label>Code</label>
		<span id="code-info" class="info"></span><br/>
		<input type="text" name="code" id="add-code" class="demoInputBox">
		</div>
		<div>
		<label>Category</label> 
		<span id="category-info" class="info"></span><br/>
		<input type="text" name="category" id="category" class="demoInputBox">
		</div>
		<div>
		<label>Price</label> 
		<span id="price-info" class="info"></span><br/>
		<input type="text" name="price" id="price" class="demoInputBox">
		</div>
		<div>
		<input type="button" name="submit" id="btnAddAction" value="Add" onClick="add();" />
		</div>
		</form>
		</div>
	</body>
</html>