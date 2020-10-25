<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>Tenant | Register</title>
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
	input[type=email]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		margin-left: 15%;

	}
	input[type=password]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
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
				width: 1230px;
				height: 445px;
				border: 1px solid block;
				/*color: pink;*/
				resize: both;
				overflow: scroll;
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
				button a{
				text-decoration: none;
				font-size: 20px;
				text-align: center;
				color: white;

		}
</style>
</head>
<body>
	<header>
	<div class="logo">
		<h1>OXYGEN PLAZA RENTAL INFORMATION SYSTEM</h1>
	</div>
	<nav>
		<ul>
			<li><a href="tenant-login.php">LOGIN</a></li>
			<li><a href="tenant.php">SIGN-IN</a></li>
		</ul>
	</nav>
</header>
<div class="bg" >
	

<form name="" method="post" action="ten.php"> 
	<h2>Tenant Account Creation</h2>
	<label for="fname" >First Name</label><br>
<input type="text" class="" name="fname" required><br>
<label for="lname" >Last Name</label><br>
<input type="text" class="" name="lname"  required><br>
<label for="contact" >Contact</label><br>
<input type="number" class="" name="contact" required><br>
<label for="contact" >id Number</label><br>
<input type="number" class="" name="idnumber" required><br>
<label for="contact" >Gender</label> 
<br> <select name="gender" class="demoInputBox" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>Male</option>
	<option>Female</option>
	<option>Others</option>
</select><br>
<label for="email" >Email</label><br>
<input type="email" class="" name="email" required><br>
<label for="password" >Password</label><br>
<input type="password" class="" name="password" required><br>
<label for="cpassword" >Confirm Password</label><br>
<input type="password" class="" name="cpassword"  required><br>
<input type="submit" name="register-user" value="Register">
<button> <a href="tenant-login.php">Cancel</a></button>
</div>
</bod/>
</html>
