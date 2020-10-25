<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$rcode = mysqli_real_escape_string($con, $_POST['rcode']);
	$type = mysqli_real_escape_string($con, $_POST['type']);
	$floor  = mysqli_real_escape_string($con, $_POST['floor']);
	$cost = mysqli_real_escape_string($con, $_POST['cost']);
	$status = mysqli_real_escape_string($con, $_POST['status']);

	    $Check_room = mysqli_query($con, "select * from room where rcode='$rcode'");
	    $check_row = mysqli_num_rows($Check_room);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into room(rcode, type, floor, cost, status) values('$rcode','$type','$floor','$cost','$status')");
			if ($insert_reg) {echo "<script>alert('data inserted successfully'); window.open('room.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('room.php','_self')</script>";}
		}else {echo "<script>alert('The code already exists'); window.open('room.php','_self')</script>";}
	}
					
?>