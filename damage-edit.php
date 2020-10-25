<?php session_start(); include('admin-session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.form{
				width: 50%;
				margin: 50px auto;
				border: 1px solid black;
				border-radius: 10px;
				background: #ccc;
				color: black;
				padding: 20px;
				text-align: left;
				opacity: 0.7;

			}
			form input{
				width: 50%;
				padding: 5px;
				margin: 10px auto;
				margin-left: 25%;
			}
			.btn{
				width: 20%;
				background: dodgerblue;
				color: white;
				border-radius: 7px;
				border: none;
				margin-left: 30%;
			}
			.btn:hover{
				color: dodgerblue;
				background: white;
				border: 1px dodgerblue solid;
			}
			label{
				margin-left: 25%
			}

			button{
				size: 20px
				padding: 5px 25px;
				margin: 2px 2px;
				cursor: pointer;
				border-radius: 6px;
				width: 20%;
				height: 6%;
				border: 2px solid black;
				background-color: red;

			}
			button a{
				text-align: center;
				text-decoration: none;
				font-size: 16px;
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
<body>


<?php 

require '../dbcontroller.php';
include ('a-header.php');

error_reporting(0);

$pID = $_GET['damageid'];

$selectQuery = mysqli_query($con, "select * from damage where id='$pID' ");
$fetchQuery = mysqli_fetch_array($selectQuery);

$rcode = $fetchQuery['rcode'];
$damage = $fetchQuery['damage'];
$floor = $fetchQuery['floor'];
$status = $fetchQuery['status'];

?>
<div class="bg" >

<form method="post" action="" class="form" >
	<label for="fname" >Room Number</label> 
	<input type="text" name="rcode" value="<?php echo $rcode?>"><br>
	<label for="fname" >Damage</label> 
	<input type="text" name="damage" value="<?php echo $damage ?>"><br>
	<label for="fname" >floor</label> 
	<input type="text" name="floor" value="<?php echo $floor?>"><br>
	<label for="fname" >Status</label> 
	<input type="text" name="status" value="<?php echo $status?>"><br>

	<input type="submit" name="edit" class="btn" value="Update">
	<button><a href="admin-home.php">Cancel</a></button> 
</form>
</div>

<?php 

	if (isset($_POST['edit'])) {
		$rcode = $_POST['rcode'];
		$damage = $_POST['damage'];
		$floor = $_POST['floor'];
		$status = $_POST['status'];

		$checkQuery = mysqli_query($con, "select * from damage where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update damage set rcode='$rcode', damage='$damage', floor='$floor', status='$status' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Damages updated successfully'); window.open('view-damage.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>