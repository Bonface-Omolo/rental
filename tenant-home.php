<?php 
session_start();
include('tenant-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tenant Home</title>
	<style type="text/css">
		ul.ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 15%;
			background-color: #f1f1f1;
			position: fixed;
			height: 100%;
			overflow: auto;
		}
		li a.btn{
			display: block;
			color: #000;
			padding: 20px 0 20px 40px;
			text-decoration: none;
		}
		li a.btn:hover:not(activ){
			background-color: turquoise;
			color: white;
		}
		li a.activ{
			background-color: steelblue;
			color: white;
		}
			.bg{
			background-image: url("../image/rent1.jpg");
			background-size: contain;
			width: 1235px;
			height: 450px;
			border: 1px solid block;
			/*color: pink;*/
			resize: both;
			overflow: scroll;
        }
	
	</style>
</head>
<body style="padding: 0px; margin: 0px;">
<?php include('t-header.php'); ?>
<div class="bg" >

<ul class="ul" >
		<li><a class="btn" href="room.php" >Apply Rooms</a></li>
		<li><a class="btn" href="mpesa-php/index.html" >Make Payments</a></li>
		<li><a class="btn" href="view-room.php" >View Rooms</a></li>
		<li><a class="btn" href="view-hosteller.php" >View Payment Records</a></li>
		<li><a class="btn" href="view-room.php" >View Payment Records</a></li>
		
	</ul>
</div>
</body>
</html>