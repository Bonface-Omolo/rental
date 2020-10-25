<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>Add Admin</title>
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
		height: 10px;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
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
	input[type=email]{
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
	input[type=password]{
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
		border-radius: 20px;
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
			label{
				margin-left: 15%;
			}
			button{
				width: 100px;
				height: 30px;
				background-color: red;
				border-radius: 8px;

			}
			button a {
				text-decoration: none;
			}
</style>
</head>
<body>
	<header>
	<div class="logo">
		<h1>OXYGEN PLAZA INFORMATION INFORMATION SYSTEM</h1>
	</div>
	<?php include('a-header.php'); ?>
</header>
<div class="bg" >

<form name="frmRegistration" method="post" action="u.php"> 
	<H2>New user</H2>
<label for="fname" >First Name</label><br> 
<input type="text" class="demoInputBox" name="fname"  required><br>
<label for="lname" >Last Name</label><br> 
<input type="text" class="demoInputBox" name="lname" required><br>
<label for="idnumber" >ID Number</label><br> 
<input type="number" class="demoInputBox"name="idnumber"  required><br>
<label for="contact" >User</label>
<br> <select name="user" class="demoInputBox" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px; margin-left: 15%;">>
	<option>Admin</option>
	<option>Agent</option>
	<option>Caretaker</option>
</select><br>
<label for="contact" >Contact</label><br> 
<input type="number" class="demoInputBox" name="contact" required><br>
<label for="contact" >Gender</label> 
<br> <select name="gender" class="demoInputBox" style="color: black; width:70%; padding: 10px; border: 2px solid steelblue; border-radius: 4px;margin-left: 15%;">>
	<option>Male</option>
	<option>Female</option>
	<option>Others</option>
</select><br>
<label for="email" >Email</label><br>
<input type="email" class="demoInputBox" name="email"  required><br>
<label for="password" >Password</label><br> 
<input type="password" class="demoInputBox" name="password" required><br>
<label for="[password]" >Confirm Password</label><br> 
<input type="password" class="demoInputBox" name="cpassword" required><br>
<input type="submit" name="register-user" value="Register" class="btnRegister" required>
<button> <a href="admin-home.php">Cancel</a></button>
</form>
</div>

</bod/>
</html>
