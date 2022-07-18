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
	<a href="index.html">Back</a>
	<table id="job">
		<thead>
			<tr>
				<th><strong>S.No</strong></th>
				<th><strong>Company</strong></th>
				<th><strong>Title</strong></th>
				<th><strong>Description</strong></th>
				<th><strong>Qualifications</strong></th>
			</tr>
		</thead>
		<tbody id="job">
			<?php
			require 'connect.php';
			$count = 1;
			$query = "SELECT * FROM jobs ORDER BY id";
			$result = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td><?php echo $count;?></td>	
				<td><?php echo $row['company'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['qualifications'];?></td>
				<td>
					<a href="viewjobs.php?id=<?php echo $row['id']; ?>" style="background: #44c8f6;">View</a>
				</td>
				<td>
					<a href="editjobs.php?id=<?php echo $row['id']; ?>" style="background: #FFA701;">Edit</a>
				</td>
				<td>
					<a href="deletejobs.php?id=<?php echo $row['id']; ?>" style="background: #ee3a3a;">Delete</a>
				</td>
				</tr>
			<?php $count++; } ?>
		</tbody>
	</table>

</body>
</html>