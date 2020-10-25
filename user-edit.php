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

$pID = $_GET['userid'];

$selectQuery = mysqli_query($con, "select * from user where id='$pID' ");
$fetchQuery = mysqli_fetch_array($selectQuery);

$fname = $fetchQuery['fname'];
$lname = $fetchQuery['lname'];
$idnumber = $fetchQuery['idnumber'];
$user = $fetchQuery['user'];
$gender = $fetchQuery['gender'];
$email = $fetchQuery['email'];

?>
<div class="bg" >

<form method="post" action="" class="form" >
	<label for="fname" >First Name</label> 
	<input type="text" name="fname" value="<?php echo $fname?>"><br>
	<label for="fname" >Last Name</label> 
	<input type="text" name="lname" value="<?php echo $lname ?>"><br>
	<label for="fname" >Id Number</label> 
	<input type="text" name="idnumber" value="<?php echo $idnumber?>"><br>
	<label for="fname" >User</label> 
	<input type="text" name="user" value="<?php echo $user?>"><br>
	<label for="fname" >Gender</label> 
	<input type="text" name="gender" value="<?php echo $gender?>"><br>
	<label for="fname" >Email</label> 
	<input type="text" name="email" value="<?php echo $email ?>"><br>

	<input type="submit" name="edit" class="btn" value="Update">
	<button><a href="admin-home.php">Cancel</a></button> 
</form>
</div>

<?php 

	if (isset($_POST['edit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$idnumber = $_POST['idnumber'];
		$user = $_POST['user'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];

		$checkQuery = mysqli_query($con, "select * from user where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update user set fname='$fname', lname='$lname', idnumber='$idnumber', user='$user', gender='$gender', email='$email' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('User updated successfully'); window.open('view-users.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>