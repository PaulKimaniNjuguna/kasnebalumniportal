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
		#evaluate 
		{
			width: 70%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
			margin: auto;
			
		}
		#evaluate th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#eval 
		{
			width: 70%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
			margin: auto;
			
		}
		#eval td 
		{
			text-align: center;
		}
		#evaluate th, #eval td 
		{
			border: 1px solid #C1C1C1;
			padding: 8px;
		} 
	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<table>
		<thead id="evaluate">
			<tr>
				
				<th>Name</th>
				<th>Email</th>
				<th>Comment</th>
			</tr>
		</thead>
		<tbody id="eval">
			<?php

			require 'connect.php';
			
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM comments WHERE id = '".$id."'";
			$result = mysqli_query($mysqli, $query);
			
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td><br>
					<td><?php echo $row['comment']; ?></td><br>
				</tr> 
				<?php
				
			}
			?>
		</tbody>

	</table>

</body>
</html>