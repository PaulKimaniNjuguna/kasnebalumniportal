<?php
require 'connect.php';

$id = $_REQUEST['id'];
$query = "SELECT * FROM articles WHERE id = '".$id."'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add articles</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;


		}
		body{
			width: 100%;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.container {
			padding: 20px;
			background: #FFF;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
			width: 600px;
			min-height: 400px;
		}
		h3 {
			text-align: center;
			text-transform: uppercase;
			font-size: 1.2rem;
			text-decoration: underline;
		}
		.container .form .input-group {
			width: 100%;
			height: 100px;
			margin-bottom: 30px;
		}
		.container .form .input-group label { 
			font-weight: 800;
			margin-bottom: 5px;
			display: block;
			font-size: 1.2rem;
		 }
		 .container	.form	.input-group input	{
		 	width: 100%;
			height: 50%;
			border: 1px solid #12689a;
			outline: none;
			padding:5px 10px;
		 }
		 .container .form .input-group textarea {
		 	width: 100%;
			height: 100%;
			border: 1px solid #12689a;
			outline: none;
			padding:5px 10px;
		 }
		 .container	.form .input-group.textarea	{
		 	height: 200px;
		 }
		 .container	.form .input-group.textarea textarea{
		 	resize: none;
		 }
		 .container	.form .input-group.picture label	{
		 	font-weight: 800;
			margin-bottom: 5px;
			display: block;
			font-size: 1.2rem;
		 }
		 .container	.form .input-group.picture input {
		 	
			
		 }
		 .container	.form .button	.btn{
		 	margin: auto;
			display: block;
			padding: .7rem 2rem;
			opacity: .8;
			color: #FFF;
			background: #12689a;
			border: none;
			outline: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 1rem;
			transition: .3 ease-in;
		 }
		 .container	.form .button	.btn:hover{
		 	opacity: 1;
		 }
		 .container .form .button a 
		 {
		 	background-color: #ee3a3a;
  			color: white;
  			padding: 15px 25px;
  			text-decoration: none;
  			float:left;
		 }
	</style>
</head>
<body>
	<?php
	

	if (isset($_POST['update'])) 
	{
		$id = $_REQUEST['id'];
		$title = $_REQUEST['title'];
		$description = $_REQUEST['description'];
		
		$updatequery = "UPDATE articles SET title = '".$title."', description = '".$description."' WHERE id ='".$id."'";
		mysqli_query($mysqli, $updatequery) or die(mysqli_error());
		echo "<script>alert('Record updated.')</script><br><br>
		<a href='displayarticles.php'>Click here to go Back</a>";
		
	}
	else 
	{
	?>

	
	<div class="container">
		<h3>Add articles</h3>
		<form class="form" action="" method="POST" enctype="multipart/form-data"> <!--enctype allows to upload a file -->
			<div class="input-group">
				<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				<label>Title</label>
				<input type="text" name="title" placeholder="Enter title of your article" required value="<?php echo $row['title'];?>">
			</div>
			<div class="input-group textarea">
				<label>Description</label>
				<textarea id="description" name="description" placeholder="Enter description" required><?php echo $row['description'];?></textarea>
			</div>
			
			<div class="button">
				<button class="btn" name="update">Update</button>
				
			</div>
			<?php }?>	
		</form>

		
		
	</div>
</body>
</html>