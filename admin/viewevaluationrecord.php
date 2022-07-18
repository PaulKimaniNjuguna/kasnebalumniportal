<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View record</title>
	<style>
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
	<table>
		<thead id="evaluate">
			<tr>
				
				<th>Impact</th>
				<th>Answer</th>
				<th>Recommendation</th>
			</tr>
		</thead>
		<tbody id="eval">
			<?php

			require 'connect.php';
			
			$id = $_REQUEST['id'];
			$query = "SELECT * FROM evaluation WHERE id = '".$id."'";
			$result = mysqli_query($mysqli, $query);
			
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
				
					<td><?php echo $row['impact']; ?></td>
					<td><?php echo $row['answer']; ?></td><br>
					<td><?php echo $row['recommendation']; ?></td><br>
				</tr> 
				<?php
				
			}
			?>
		</tbody>

	</table>

</body>
</html>



