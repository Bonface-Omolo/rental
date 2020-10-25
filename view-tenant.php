

<?php 
 require '../dbcontroller.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<style type="text/css">
		.table{
	margin: 10px auto;
	border-collapse: collapse;
	width: 100%;
	background-color: white;

}
.table tr th{
	background-color: #778899;
	color: white;
	padding: 10px;
}
.table tr td{
	padding: 5px;
}
.table tr:hover{
	background-color: #ccc;
}
.center{
	width: 80%;
	margin: 20px auto;
}
header{
		width: 105%;
		position: fixed;
		position: relative;
		height: 100px;
		background: #00FF7F;
	}
	.logo{
		position: absolute;
		left: 10%;
		top: 10px;
	}
	nav{
		position: absolute;
		top: 20px;
		right: 10%;
	}
	nav ul li{
		list-style: none;
		float: left;
	}
	nav ul li a{
		text-decoration: none;
		padding: 20px;
		color: white;
	}
	nav ul li a:hover{
		color: #FF7F50;
		font-size: 20px;
	}
	h1{
		font-size: 18px;
		padding: 20px;
	}
	.bg{
		background-image: url("../image/rent1.jpg");
		background-size: contain;
		width: 1100px;
		height: 400px;
		border: 1px solid block
		/*color: pink;*/
		resize: both;
		overflow: scroll;
	}
	.center{
		width: 80%;
		margin: 20px auto;
		}
		.search{
		width: 40%;
		padding: 5px;
		float: left;
		text-align: right;
	}
	</style>
</head>
<body>
	<header>
	<div class="logo">
		<h1>OXYGEN PLAZA INFORMATION SYSTEM</h1>
	</div>
	<nav>
		<ul>
			<li><a href="admin-home.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="services">SERVICES</a></li>
			<li><a href="admin-logout.php">LOGOUT</a></li>
		</ul>
	</nav>
</header>
<div class="bg" >
	<div class="search">
	<form action="search-tenant.php" method="post">
		<input placeholder="Search by names, id number, title, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>

<div class="center">
		<h2 style="margin-left: 40%;">Tenants Information</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from tenants order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

			echo "
					<table class='table' border=1>
					<thead>
					<tr>
						<th>NAMES</th>
						<th>CONTACT</th>
						<th>ID NUBER</th>
						<th>GENDER</th>
						<th>EMAIL</th>
						<th>CHECKLIST</th>
						<th>ACTION</th>
					</tr>
					</thead>
					<tbody>
				";

			if ($numberofRows>0) {
				$seq_no = 1;
				while ($row = mysqli_fetch_assoc($selectQuery)) {
			?>
				
				<tr>
					<form action="" method="post">
						
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['contact']; ?> </td>
						<td><?php echo $row['idnumber']; ?> </td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['email']; ?></td>

						
						<td ><label><input type="checkbox" class="indeterminate-checkbox" name='check' value="<?php echo $row['id']; ?>" required /><span></span></label></td>
						<td>
							<a href='tenant-edit.php?tenantid=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Edit</a>
						
							<button type="submit" name="delete" value="Delete" style="padding:3px;border-radius:4px;border:none;background-color:red;color:white">Delete</button>
						</td>
					</form>
				</tr>
				
						
			<?php
				$seq_no ++;
				} 
			}
		echo '</tbody></table>';
		?>
	</div>
</div>


<?php 

	if (isset($_POST['delete'])) {
		$check = $_POST['check'];

		$checkQuery = mysqli_query($con, "select * from tenants where id='$check' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0) {
			$delete = mysqli_query($con, "delete from tenants where id='$check'");
			if ($delete) {
				echo "<script>alert('Tenant Deleted successfully'); window.open('admin-home.php','_self') </script>";
			}else{
				echo "<script>alert('The row failed to delete'); window.open('view-current.php','_self') </script>";
			}
		}
	}

?>
</body>
</html>