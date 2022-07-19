<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View record</title>
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
			width: 70%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
			margin: auto;
			
		}
		#job th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#job 
		{
			width: 70%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
			margin: auto;
			
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
	</style>
</head>
<body>
	<a href="displayjobs.php">Back</a>
	<table>
		<thead id="job">
			<tr>
				
				<th>Company</th>
				<th>Title</th>
				<th>Description</th>
				<th>Qualifications</th>
			</tr>
		</thead>
		<tbody id="job">
			<?php

			require 'connect.php';
			
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM jobs WHERE id = '".$id."'";
			$result = mysqli_query($mysqli, $query);
			
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				
					<td><?php echo $row['company']; ?></td>
					<td><?php echo $row['title']; ?></td><br>
					<td><?php echo $row['description']; ?></td><br>
					<td><?php echo $row['qualifications']; ?></td><br>
				</tr> 
				<?php
				
			}
			?>
		</tbody>

	</table>

</body>
</html>