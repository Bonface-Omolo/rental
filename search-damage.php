<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table{
			margin: 10px auto;
			border-collapse: collapse;
			width: 80%;
			background-color: white;
		}
		.table tr th{
			background-color: dodgerblue;
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
		.bg{
		background-image: url("../image/rent1.jpg");
		background-size: contain;
		width: 1100px;
		height: 500px;
		border: 1px solid block;
		/*color: pink;*/
		resize: both;
		overflow: scroll;
	}
	</style>
</head>
<body>

<div class="bg" >
<?php 

require '../dbcontroller.php';
include ('c-header.php');


if (isset($_POST['search'])) {
	$input = mysqli_real_escape_string($con, $_POST['search-input']);

	$searchQuery = mysqli_query($con, "select * from damage where rcode like '%$input%'  or damage like '%$input%' or floor like '%$input%' or status like '%$input%' ");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>ROOM NUMBER.</th>
					<th>DAMAGES</th>
					<th>FOOR</th>
					<th>STATUS</th>
					<th>Checklist</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
		";

	if (mysqli_num_rows($searchQuery)>0){
		$no =1;
		while ($row = mysqli_fetch_array($searchQuery)) {
			?>
				<tr>
					<form action="action.php" method="post">
						<td><?php echo $row['rcode']; ?></td>
						<td><?php echo $row['damage']; ?></td>
						<td><?php echo $row['floor']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td><label><input class="indeterminate-checkbox" type="checkbox" name="check" value="<?php echo $row['p_id']; ?>" required><span></span></label></td>
						<td>
							<a href='edit.php?p_id=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Edit</a>
							<button type="submit" name="delete" value="Delete" style="padding:3px;border-radius:4px;border:none;background-color:red;color:white">Delete</button>
						</td>
					</form>
				</tr>
			<?php
				$no ++;
				}
			}echo '</tbody></table>';
	}


?>
</div>

</body>
</html>