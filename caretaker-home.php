



<?php 
session_start();
include('caretaker-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caretaker Home page</title>
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
			padding: 10px 0 10px 10px;
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

<?php include('c-header.php'); ?>
<div class="bg" >
	
	

	<ul class="ul" >
		<li><a class="btn" href="damage.php">Add Damages</a></li>
		<li><a class="btn" href="view-damage.php">View Damages</a></li>
		<li><a class="btn" href="room.php">Add Room</a></li>
		<li><a class="btn" href="view-room.php">View Rooms</a></li>
		
	</ul>
</div>
</body>
</html>