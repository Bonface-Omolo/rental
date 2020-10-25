<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>Booking Form</title>
<style type="text/css">
	form{
		 width: 40%;
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
		border-radius: 4px;
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
		margin-left: 15%;


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
		border-radius: 8px;
		text-align: center;
		margin-left: 40%;
	}
	button[type=cancel]{
		size: 20px;
		background-color: #FFA500;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 40%;
	}
	 label{
	 	margin-left: 15%;
	 	
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
				background: #00FF7F;
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
			<li><a href="tenant-home.php">SERVICES</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="tenant-logout.php">LOGOUT</a></li>
		</ul>
	</nav>
</header>
<div class="bg" >

<form name="frmRegistration" method="post" action="bok.php"> 
	<h2>Booking Form</h2>

<label for="idnumber" >ID Number</label><br>
<input type="number" class="demoInputBox" name="idnumber" required><br>

<label for="lname" >Parent/Gudian First Name</label><br> 
<input type="text" class="demoInputBox" name="pgfname" required><br>
<label for="lname" >Parent/Gudian Last Name</label><br>
<input type="text" class="demoInputBox" name="pglname" required><br>
<label for="lname" >Parent/Gudian Contact</label><br>
<input type="number" class="demoInputBox" name="pgcontact" required><br>

<label for="lname" >Room Name</label><br> 
<input type="text" class="demoInputBox" name="roomname" required><br>
<label for="lname" >Amount</label><br> 
<input type="text" class="demoInputBox" name="amount" required><br>
<label for="lname" >Date of Payment</label> <br>
<input type="date" name="date"><br>
<label for="lname" >Mode of Payment</label><br> 
<input type="text" class="demoInputBox" name="payment" required><br>
<input type="submit" name="book" value="Register" class="btnRegister" required>
</form>
</div>
</div>
</bod/>
</html>
