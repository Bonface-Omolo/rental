
<?php 
require '../dbcontroller.php';
 ?>
			
<html>
<head>
<title>Agent login Form</title>
	<style>
		body{
			margin: 0px;
			padding: 0px;
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

			.form{
				width: 50%;
				margin: 50px auto;
				border: 1px solid black;
				border-radius: 10px;
				background: #ccc;
				color: black;
				padding: 20px;
				text-align: center;
				opacity: 0.7;
			}
			form input{
				width: 50%;
				padding: 5px;
				margin: 10px auto;
			}
			.btn{
				width: 20%;
				background: dodgerblue;
				color: white;
				border-radius: 7px;
				border: none;
				height: 6%;
			}
			.btn:hover{
				color: dodgerblue;
				background: white;
				border: 1px dodgerblue solid;
			}
				.bg{
				background-image: url("../image/rent1.jpg");
				background-size: contain;
				width: 1100px;
				height: 400px;
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
				width: 25%;
				height: 6%;
				border: 2px solid black;
				background-color: #556B2F;
			}
				button a{
				text-decoration: none;
				font-size: 12px;
				text-align: center;
				color: white;

		}
	</style>
</head>
<body>
	<header>
	<div class="logo">
		<h1>OXYGEN PLAZA INFORMATION SYSTEM</h1>
	</div>
	<nav>
		<ul>
			<li><a href="../index.php">HOME</a></li>
			<li><a href="agent-login.php">LOGIN</a></li>
			<!-- <li><a href="hosteller-sign.php">SIGN-IN</a></li> -->
		</ul>
	</nav>
</header>
<div class="bg" >
	
<form class="form" name="frmRegistration" method="post" action="a-login.php">
	<h2>Agent login</h2>
<input placeholder="email" type="email" class="demoInputBox" name="email" required>
<input placeholder="Password" type="password" class="demoInputBox" name="password" required><br>

<input class='btn' type="submit" name="login-user" value="Login" >
<button> <a href="caretaker-home.php">Foget Password</a></button>
</form>
</div>
</bod/>
</html>
