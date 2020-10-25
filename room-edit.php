<!DOCTYPE html>
<html>
<head>
	<title>room edit</title>
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
			}
			.btn:hover{
				color: dodgerblue;
				background: white;
				border: 1px dodgerblue solid;
			}
			label{
				margin-left: 25%
			}
			.bg{
				background-image: url("../image/rent1.jpg");
				background-size: contain;
				width: 1230px;
				height: 500px;
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

	$pID = $_GET['productID'];

	$selectQuery = mysqli_query($con, "select * from room where id='$pID' ");
	$fetchQuery = mysqli_fetch_array($selectQuery);

	$rcode = $fetchQuery['rcode'];
	$type = $fetchQuery['type'];
	$floor = $fetchQuery['floor'];
	$cost = $fetchQuery['cost'];
	$status = $fetchQuery['status'];

	?>

<form method="post" action="" class="form" ><br>
	<label for="fname" >Room Number</label> 
	<input type="text" name="rcode" value="<?php echo $rcode ?>"><br>
	<label for="fname" >Roo Type</label> 
	<input type="text" name="type" value="<?php echo $type?>"><br>
	<label for="fname" >Room Floor</label>
	<input type="text" name="floor" value="<?php echo $floor?>"><br>
	<label for="fname" >Cost</label> 
	<input type="text" name="cost" value="<?php echo $cost?>"><br>
	<label for="fname" >Status</label> 
	<input type="text" name="status" value="<?php echo $status ?>"><br>

	<input type="submit" style="margin-left: 40%" name="edit" class="btn" value="Update">
</form>

<?php 

	if (isset($_POST['edit'])) {
		$rcode = $_POST['rcode'];
		$type = $_POST['type'];
		$floor = $_POST['floor'];
		$cost = $_POST['cost'];
		$status = $_POST['status'];

		$checkQuery = mysqli_query($con, "select * from room where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update room set rcode='$rcode', type='$type', floor='$floor',cost='$cost', status='$status' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Room updated successfully'); window.open('view-room.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>