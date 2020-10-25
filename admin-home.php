<?php 
session_start();
include('admin-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home page</title>
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
			padding: 10px 0 10px 20px;
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
			width: 1070px;
			height: 400px;
			border: 1px solid block;
			/*color: pink;*/
			resize: both;
			overflow: scroll;
	}
	</style>
</head>
<body></body>

<?php include('a-header.php'); ?>
<div class="bg" >
	
	<ul class="ul" >
		<li><a class="btn" href="user.php" >Add New User</a></li>
		<li><a class="btn" href="view-users.php" >View Users</a></li>
		<li><a class="btn" href="room.php" >Add New Room</a></li>
		<li><a class="btn" href="view-room.php" >View Room</a></li>
		<li><a class="btn" href="view-booked.php" >View Payment</a></li>
		<li><a class="btn" href="view-damage.php" >View Damages</a></li>
		<li><a class="btn" href="view-tenant.php" >View Tenant</a></li>
		
	</ul>
</div>

</body>
</html>