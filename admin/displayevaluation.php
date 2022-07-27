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
		#evaluate 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
		}
		#evaluate th 
		{
			text-align: center;
			background-color: #44c8f6;
			color: #FFFFFF;
		}
		#eval 
		{
			width: 100%;
			border: collapse;
			font-family: Arial, Helvetica, sans-serif;
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
		#eval td a 
		{
			
  			color: white;
  			padding: 2px 3px 2px;
  			text-decoration: none;
  			
		} 

	</style>
</head>
<body>
	<a href="index.php">Back</a>
	<table id="evaluate">
		<thead>
			<tr>
				<th><strong>S.No</strong></th>
				<th><strong>Id</strong></th>
				<th><strong>Impact</strong></th>
				<th><strong>Answer</strong></th>
				<th><strong>Recommendation</strong></th>
			</tr>
		</thead>
		<tbody id="eval">
			<?php
			require 'connect.php';
			$count = 1;
			$query = "SELECT * FROM evaluation ORDER BY id";
			$result = mysqli_query($mysqli, $query);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td><?php echo $count;?></td>
				<td><?php echo $row['id'];?></td>	
				<td><?php echo $row['impact'];?></td>
				<td><?php echo $row['answer'];?></td>
				<td><?php echo $row['recommendation'];?></td>
				<td>
					<a href="viewevaluationrecord.php?id=<?php echo $row['id']; ?>" style="background: #44c8f6;">View</a>
				</td>
				<td>
					<a href="deleteevaluation.php?id=<?php echo $row['id']; ?>" style="background: #ee3a3a;">Delete</a>
				</td>
				</tr>
			<?php $count++; } ?>
		</tbody>
	</table>

</body>
</html>