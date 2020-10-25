<?php session_start(); include('tenant-session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>STUDENT INFORMATION </title>
	<style type="text/css">
		.container{
	width:70%;
	margin: 20px auto;
	background: #ddd;
	padding: 10px;
}
.tbl{
	margin: 10px auto;
	width: 90%;
	border-collapse: collapse;
}
.tbl th{
	background: dodgerblue;
}
.bg{
	background-image: url("../image/rent1.jpg");
	background-size: contain;
	width: 1230px;
	height: 450px;
	border: 1px solid block;
	/*color: pink;*/
	resize: both;
	overflow: scroll;
	}
	</style>
</head>
<body>

	<?php include('t-header.php') ?>
	<div class="bg" >
		<div class="container">
			<?php 
			require '../dbcontroller.php';
			$fetch_std = mysqli_query($con, "select * from room order by id desc");
			$fetched_rows = mysqli_num_rows($fetch_std);
			if ($fetched_rows>0) {
				
			echo "<table class='tbl' border=1>
					<tr>
						<th>ROOM CODE</th>
						<th>ROOM TYPE</th>
						<th>FLOOR</th>
						<th>COST</th>
						<th>STATUS</th>
					</tr>
					";

				while ($row = mysqli_fetch_assoc($fetch_std)) {
					echo "
					<tr>
						<td>".$row['rcode']."</td>
						<td>".$row['type']."</td>
						<td>".$row['floor']."</td>
						<td>".$row['cost']."</td>
						<td>".$row['status']."</td>
					</tr>
					";
				}echo "</table>";
			}


			?>
		</div>
	</div>
</body>
</html>