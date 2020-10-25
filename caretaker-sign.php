<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>Caretaker sign up</title>
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
	input[type=email]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;

	}
	input[type=password]{
		width: 70%;
		height: 20px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;


	}
	input[type=submit]{
		size: 20px;
		background-color: #4CAF50;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 20px;
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
</style>
</head>
<body>
	<header>
	<div class="logo">
		<h1>OXYGEN PLAZA INFORMATION INFORMATION SYSTEM</h1>
	</div>
	<nav>
		<ul>
			<li><a href="Hostellerlogin.php">LOGIN</a></li>
			
		</ul>
	</nav>
</header>
<form name="frmRegistration" method="post" action="regi.php"> 
	<H2>Hosteller Registration Form</H2>
<label for="fname" >First Name</label><br> 
<input type="text" class="demoInputBox" name="fname" required><br>
<label for="lname" >Last Name</label><br> 
<input type="text" class="demoInputBox" name="lname" required><br>
<label for="idnumber" >ID Number</label><br> 
<input type="number" class="demoInputBox"name="id_number" required><br>
<label for="contact" >Contact</label><br> 
<input type="number" class="demoInputBox" name="contact" required><br>
<label for="contact" >Gender</label><br>
<input type="radio" name="gender" value="male" checked >Male
<input type="radio" name="gender" value="female" checked >Female
<input type="radio" name="gender" value="Other" checked >Other<br>
<label for="email" >Email</label><br>
<input type="email" class="demoInputBox" name="email" required><br>
<label for="password" >Password</label><br> 
<input type="password" class="demoInputBox" name="password" required><br>
<label for="[password]" >Confirm Password</label><br> 
<input type="password" class="demoInputBox" name="cpassword" required><br>
<input type="submit" name="register-user" value="Register" class="btnRegister" required>
<button type="cancel" name="cancel" >Cancel</button>
</form>
</div>
</bod/>
</html>
