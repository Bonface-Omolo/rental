<?php 

require '../dbcontroller.php';

if (isset($_POST['payment'])) {
	$idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
	$rname = mysqli_real_escape_string($con, $_POST['rname']);
	$amount = mysqli_real_escape_string($con, $_POST['amount']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$payment = mysqli_real_escape_string($con, $_POST['payment']);


	 $Check_book = mysqli_query($con, "select * from payment where idnumber='$idnumber'");
	    $check_row = mysqli_num_rows($Check_book);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into payment(idnumber, rname, amount, date, mode) values('$idnumber','$rname','$amount','$date','$payment')");
			if ($insert_reg) {echo "<script>alert('data inserted successfully'); window.open('payment.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('payment.php','_self')</script>";}
		}else {echo "<script>alert('The contact already exists'); window.open('payment.php','_self')</script>";}
	}
			



?>

