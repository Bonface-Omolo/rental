<?php 

require '../dbcontroller.php';

if (isset($_POST['submit'])) {
	$rcode = mysqli_real_escape_string($con, $_POST['rcode']);
	$damage = mysqli_real_escape_string($con, $_POST['damage']);
	$floor  = mysqli_real_escape_string($con, $_POST['floor']);
	$status = mysqli_real_escape_string($con, $_POST['status']);

	    $Check_room = mysqli_query($con, "select * from damage where rcode='$rcode'");
	    $check_row = mysqli_num_rows($Check_room);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into damage(rcode, damage, floor, status) values('$rcode','$damage','$floor','$status')");
			if ($insert_reg) {echo "<script>alert('data inserted successfully'); window.open('damage.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('damage.php','_self')</script>";}
		}else {echo "<script>alert('The code already exists'); window.open('damage.php','_self')</script>";}
	}
					
?>