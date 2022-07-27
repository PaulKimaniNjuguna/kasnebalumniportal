<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View evaluation form</title>
	<style>
		a 
		{
			background-color: #ee3a3a;
  			color: white;
  			padding: 15px 25px;
  			text-decoration: none;
  			float:left;
		}
		#job 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#job th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#job 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#job td 
		{
			text-align: center;
		}
		#job th, #job td 
		{
			border: 1px solid #C1C1C1;
			padding: 8px;
		} 
		#job td a 
		{
			
  			color: white;
  			padding: 2px 3px 2px;
  			text-decoration: none;
  			
		} 

	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<table id="job">
		<thead>
			<tr>
				<th><strong>#</strong></th>
				<th><strong>Name</strong></th>
				<th><strong>Email</strong></th>
				<th><strong>Reg No</strong></th>
				<th><strong>Phone Number</strong></th>
				<th><strong>Approve ?</strong></th>
				<th><strong>Edit</strong></th>
			</tr>
		</thead>
		<tbody id="job">
			<?php
			require 'connect.php';
			$count = 1;
			$query = "SELECT * FROM users WHERE approved='no'";
			$result = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td><?php echo $count;?></td>	
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['regno'];?></td>
				<td><?php echo $row['phoneNumber'];?></td>
				<td>
					<a href="approve.php?id=<?php echo $row['id']; ?>" style="background: #63a342;">Approve</a>
				</td>
				<td>
					<a href="editUserProfile.php?id=<?php echo $row['id']; ?>" style="background: #63a342;">Edit</a>
				</td>
				</tr>
			<?php $count++; } ?>
		</tbody>
	</table>

</body>
</html>