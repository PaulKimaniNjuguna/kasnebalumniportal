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
		#comment 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#comment th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#comment 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#comment td 
		{
			text-align: center;
		}
		#comment th, #comment td 
		{
			border: 1px solid #C1C1C1;
			padding: 8px;
		} 
		#comment td a 
		{
			
  			color: white;
  			padding: 2px 3px 2px;
  			text-decoration: none;
  			
		} 

	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<table id="comment">
		<thead>
			<tr>
				<th><strong>S.No</strong></th>
				<th><strong>Name</strong></th>
				<th><strong>Email</strong></th>
				<th><strong>Comment</strong></th>
			</tr>
		</thead>
		<tbody id="comment">
			<?php
			require 'connect.php';
            session_start();
            $userId = $_SESSION["userId"];
			$count = 1;
			$query = "SELECT * FROM comments WHERE userId = $userId ORDER BY id";
			$result = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td><?php echo $count;?></td>	
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['comment'];?></td>
				<td>
					<a href="viewcomment.php?id=<?php echo $row['id']; ?>" style="background: #44c8f6;">View</a>
				</td>
				<td>
					<a href="deletecomments.php?id=<?php echo $row['id']; ?>" style="background: #ee3a3a;">Delete</a>
				</td>
				</tr>
			<?php $count++; } ?>
		</tbody>
	</table>

</body>
</html>