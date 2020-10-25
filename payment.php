<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>payment</title>
<style type="text/css">
	form{
		 width: 60%;
		margin: 2px auto;
		border-radius: 10px;
		background: white;
		color: black;
		padding: 2px;
		text-align: justify;
	}
	input[type=text]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;


	}
	input[type=number]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;


	}
	input[type=date]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;


	}
	input[type=submit]{
		size: 20px;
		background-color: #4CAF50;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 8px;
		text-align: center;
	}
	button[type=cancel]{
		size: 20px;
		background-color: #FFA500;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 20px;
	}
	 label{
	 	
	}
	h2{
		padding: 2px;
		margin: 2px;
		text-align: center;
	}
	
		header{
				width: 100%;
				position: fixed;
				position: relative;
				height: 100px;
				background: dodgerblue;
			}
			.logo{
				position: absolute;
				left: 10%;
				top: 10px;
			}
			nav{
				position: absolute;
				top: 20px;
				right: 10%;
			}
			nav ul li{
				list-style: none;
				float: left;
			}
			nav ul li a{
				text-decoration: none;
				padding: 20px;
				color: white;
			}
			nav ul li a:hover{
				color: #FF7F50;
				font-size: 20px;
			}
			h1{
				font-size: 18px;
				padding: 20px;
			}
</style>
</head>
<body>
	<header>
	<div class="logo">
		<h1>OXYGEN PLAZA INFORMATION INFORMATION SYSTEM</h1>
	</div>
	<nav>
		<ul>
			<li><a href="tenant-home.php">HOME</a></li>
			<li><a href="student-home.php">SERVICES</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="tenant-logout.php">LOGOUT</a></li>
		</ul>
	</nav>
</header>
<form name="frmRegistration" method="post" action="pay.php"> 
	<h2>Payment Form</h2>

<label for="idnumber" >ID Number</label><br>
<input type="number" name="idnumber" required><br>
<label for="lname" >Room Number</label><br> 
<input type="text" class="" name="rname" required><br>
Amount:<br> <select name="amount" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;"  required>
	<option>5000</option>
	<option>8000</option>
	<option>10000</option>
</select><br>
<label for="lname" >Date of Payment</label> <br>
<input type="date" name="date"><br>
Mode of Payment:<br> <select name="payment" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;"  required>
	<option>Mpesa</option>
	<option>Check</option>
	<option>Cash</option>
</select><br><br>
<input type="submit" name="book" value="submit" >
</form>
</div>
</bod/>
</html>
