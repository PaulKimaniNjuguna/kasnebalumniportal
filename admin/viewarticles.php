<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View record</title>
	<style>
		#news 
		{
			width: 70%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
			margin: auto;
			
		}
		#news th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#news
		{
			width: 70%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
			margin: auto;
			
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
	</style>
</head>
<body>
	<table>
		<thead id="news">
			<tr>
				
				<th>Title</th>
				<th>Description</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody id="news">
			<?php

			require 'connect.php';
			
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM articles WHERE id = '".$id."'";
			$result = mysqli_query($mysqli, $query);
			
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['description']; ?></td><br>
					<td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="width: 1000px; height: 1000px;"/>'; ?></td><br>
				</tr> 
				<?php
				
			}
			?>
		</tbody>

	</table>

</body>
</html>