<?php 

require '../dbcontroller.php';

if (isset($_POST['book'])) {
	$idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
	$fname = mysqli_real_escape_string($con, $_POST['pgfname']);
	$lname = mysqli_real_escape_string($con, $_POST['pglname']);
	$contact = mysqli_real_escape_string($con, $_POST['pgcontact']);
	$rname = mysqli_real_escape_string($con, $_POST['roomname']);
	$amount = mysqli_real_escape_string($con, $_POST['amount']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$payment = mysqli_real_escape_string($con, $_POST['payment']);


	 $Check_book = mysqli_query($con, "select * from book where contact='$contact'");
	    $check_row = mysqli_num_rows($Check_book);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into book(idnumber, pgfname, pglname, pgcontact, rname, amount, date, payment) values('$idnumber','$fname','$lname','$contact','$rname','$amount','$date','$payment')");
			if ($insert_reg) {echo "<script>alert('data inserted successfully'); window.open('book.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('book.php','_self')</script>";}
		}else {echo "<script>alert('The contact already exists'); window.open('book.php','_self')</script>";}
	}
			



?>

