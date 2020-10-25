<?php 
session_start();
include('caretaker-session.php'); 
require '../dbcontroller.php';
include('c-header.php');
 ?>

<!DOCTYPE html>
	
<head>
<title>damage</title>
<style type="text/css">
	form{
		 width: 60%;
		margin: 2px auto;
		border-radius: 10px;
		background: white;
		color: black;
		padding: 2px;
		text-align: justify;
		opacity: 0.7;
	}
	input[type=text]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 8px;
		font-size: 16px;
		margin-left: 15%;


	}
	input[type=number]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 15%;


	}
	input[type=submit]{
		size: 20px;
		background-color: #4CAF50;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 6px;
		text-align: center;
		font-size: 16px;
		margin-left: 40%;
		font-weight: bold;
		width: 14%;
		height: 6%;

	}
	button{
		size: 20px
		padding: 5px 25px;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 6px;
		width: 14%;
		height: 6%;
		border: 2px solid black;
		background-color: red;

	}
	 label{
	 	margin-left: 15%;
	 }
	h2{
		padding: 2px;
		margin: 2px;
		text-align: center;
	}
	.bg{
		background-image: url("../image/rent1.jpg");
		background-size: contain;
		width: 1070px;
		height: 400px;
		border: 1px solid block;
		/*color: pink;*/
		resize: both;
		overflow: scroll;
	}
	button a{
		text-decoration: none;
		font-weight: bold;
		font-size: 20px;
		text-align: center;

	}
</style>
</head>
<body>
<div class="bg" >
	
<form name="frmRegistration" method="post" action="dam.php" > 
	<h2>Damage Form</h2>

<label for="rname" >Room Number</label><br> 
<input type="text" class="name" name="rcode" required><br>
<label for="Damage"> Damage</label> 
<br> <select name="damage" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>Roof</option>
	<option>Wall</option>
	<option>Windows</option>
	<option>Door</option>
	<option>Floor</option>
	<option>Water</option>
	<option>Electricity</option>
</select><br>
<label for="Floor" > Floor</label> 
<br> <select name="floor" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>First</option>
	<option>Second</option>
	<option>Third</option>
	<option>Fouth</option>
	<option>Fifth</option>
	<option>Sixth</option>
	<option>Seventh</option>
	<option>Eigth</option>
	<option>Ninth</option>
	<option>Eleventh</option>
</select><br>
<label for="Status" >Status</label> 
<br> <select name="status" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>Vacant</option>
	<option>Occupied</option>
</select><br>

<input type="submit" name="submit" value="Submit" class="btn-in">
 <button> <a href="caretaker-home.php">Cancel</a></button>
</form>
</div>
</bod/>
</html>
