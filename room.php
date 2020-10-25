<?php 
session_start();
include('tenant-session.php'); 
require '../dbcontroller.php';
include('t-header.php');
 ?>

<!DOCTYPE html>
	
<head>
<title>Room</title>
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
	}
	button{
		size: 20px;
		background-color: #FFA500;
		border: 2px solid black;
		padding: 5px 25px;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 8px;
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
		width: 1500px;
		height: 600px;
		border: 1px solid block;
		/*color: pink;*/
		resize: both;
		overflow: scroll;
	}
	button a{
		text-decoration: none;
		font-weight: bold;
		font-size: 20px;

	}
</style>
</head>
<body>
<div class="bg" >
	
<form name="frmRegistration" method="post" action="rom.php" > 
	<h2>Room Information Form</h2>


<label for="rname" >Room Number</label><br> 
<input type="text" class="name" name="rcode" required><br>
<label for="type" > Room Type</label> 
<br> <select name="type" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>Tiled</option>
	<option>Untiled</option>
</select><br>
<label for="floor" > Floor</label> 
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
<label for="cost" >Cost</label> 
<br> <select name="cost" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>8 000</option>
	<option>10 000</option>
</select><br>
<label for="status" >Status</label> 
<br> <select name="status" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>Vacant</option>
	<option>Occupied</option>
</select><br>

<input type="submit" name="submit" value="Submit" class="btn-in">
 <button> <a href="tenant-home.php">Cancel</a></button>
</form>
</div>
</bod/>
</html>
