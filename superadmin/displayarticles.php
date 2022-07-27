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
		#news 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#news th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#news
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#news td 
		{
			text-align: center;
		}
		#news th, #news td 
		{
			border: 1px solid #C1C1C1;
			padding: 8px;
		} 
		#news td a 
		{
			
  			color: white;
  			padding: 2px 3px 2px;
  			text-decoration: none;
  			
		} 

	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<form action="" method="" enctype="multipart/form-data">
	<table id="news">
		<thead>
			<tr>
				<th><strong>S.No</strong></th>
				<th><strong>Id</strong></th>
				<th><strong>Title</strong></th>
				<th><strong>Description</strong></th>
				<th><strong>Image</strong></th>
				
			</tr>
		</thead>
		<tbody id="news">
			<?php
			require 'connect.php';
			$count = 1;
			$query = "SELECT * FROM articles ORDER BY id";
			$result = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td><?php echo $count;?></td>
				<td><?php echo $row['id'];?></td>	
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo'<img height="300" width="300" src="upload/'.$row['image'].'">';?></td>
				
				<td>
					<a href="viewarticles.php?id=<?php echo $row['id']; ?>" style="background: #44c8f6;">View</a>
				</td>
				<td>
					<a href="editarticles.php?id=<?php echo $row['id'];?>" style="background: #FFA701;">Edit</a>
				</td>
				<td>
					<a href="deletearticles.php?id=<?php echo $row['id']; ?>" style="background: #ee3a3a;">Delete</a>
				</td>
				</tr>
			<?php $count++; } ?>
		</tbody>
	</table>
	</form>

</body>
</html>