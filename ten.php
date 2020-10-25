<?php 

require '../dbcontroller.php';

if (isset($_POST['register-user'])) {
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	if (strlen($password)>=8) {
		if ($password===$cpassword) {
			if (preg_match("/^[a-zA-Z]*$/", $fname) && preg_match("/^[a-zA-Z]*$/", $lname) && preg_match("/^[a-zA-Z0-9]*$/", $username)) {
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$check_email = mysqli_query($con, "select * from tenants where email='$email'");
					$Check_email_rows = mysqli_num_rows($check_email);
					if ($Check_email_rows==0) {
						$check_contact = mysqli_query($con, "select * from tenants where contact='$contact'");
						$Check_contact_rows = mysqli_num_rows($check_contact);
						if ($Check_contact_rows==0) {
							$insert_reg = mysqli_query($con, "insert into tenants(fname, lname, contact,idnumber, gender,email,  password, cpassword) values('$fname','$lname','$contact','$idnumber','$gender','$email','$password','$cpassword')");
							if ($insert_reg) {echo "<script>alert('$fname $lname Registration successful'); window.open('tenant-login.php','_self')</script>";
							}else {echo "<script>alert('$fname $lname Registration failed'); window.open('tenant.php','_self')</script>";}
						}else {echo "<script>alert('The contact already exists'); window.open('tenant.php','_self')</script>";}
					}else {echo "<script>alert('The email already exists'); window.open('tenant.php','_self')</script>";}
				}else {echo "<script>alert('Email format is not correct'); window.open('tenant.php','_self')</script>";}
			}else {echo "<script>alert('Firstname and lastname fields must contain only letter'); window.open('tenant.php','_self')</script>";}
		}else {echo "<script>alert('Password does not match confirm password'); window.open('tenant.php','_self')</script>";}
	}else {echo "<script>alert('Password should contain atleast 8 characters'); window.open('tenant.php','_self')</script>";}
	

}




?>

