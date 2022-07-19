<?php
require 'C:\xampp\htdocs\Kasneb/connect.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$error;

	if (str_contains("/^[a-zA-Z]\w+$/", $name)){
	return TRUE;
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<script>alert('Please enter a valid email.')</script>";
		}
	else {

	$sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($mysqli, $sql);
	if ($result){
		echo "<script>alert('Your feedback has been sent ')</script>";
	}
	}
	

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			width: 100%;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background: #12689a;
		}
		.wrapper {
			padding: 20px;
			background: #FFF;
			box-shadow: 0 5px 10px rgba(0,0,0,0.3);
			width: 600px;
			min-height: 400px;
		}
		.wrapper .row {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
		}
		.wrapper .form .input-group {
			width: 100%;
			height: 50px;
			margin-bottom: 50px;
		}
		.wrapper .form .row .input-group {
			padding: 0 10px;
			display: block;
		}
		.wrapper .form .row .input-group:first-child {
			padding-left: 0;
		}
		.wrapper .form .row .input-group:last-child {
			padding-right: 0;
		}
		.wrapper .form .input-group label {
			font-weight: 800;
			margin-bottom: 5px;
			display: block;
		}
		.wrapper .form .input-group .btn {
			margin: auto;
			display: block;
			padding: .7rem 2rem;
			opacity: .8;
			color: #FFF;
			background: #00b894;
			border: none;
			outline: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 1rem;
			transition: .3 ease-in;
		}
		.wrapper .form .input-group .btn:hover {
			opacity: 1;
		}
		.wrapper .form .input-group a 
		{
			background-color: #ee3a3a;
  			color: white;
  			padding: 15px 25px;
  			text-decoration: none;
  			float:left;
		}
		.wrapper .form .input-group input, .wrapper .form .input-group textarea {
			width: 100%;
			height: 100%;
			border: 1px solid #00b894;
			outline: none;
			padding:5px 10px;
		}.wrapper .form .input-group textarea {}
		
		.wrapper .form .input-group.textarea {
			
			height: 200px;
		}
		.wrapper .form .input-group.textarea textarea {
			resize: none;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<h3 style="text-align: center;padding: 10px;text-decoration: underline;">Give your feedback or comment on areas we can improve</h3>
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your name"  required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="Enter your Email"  required>
				</div>
			</div>
			
			<div class="input-group textarea">
				<label for="comment">Feedback</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment"  required></textarea>
			</div>
			<div class="input-group ">
				<button name="submit" class="btn">Post comment/feedback</button>
				<a href="index.html">Back</a>
			</div>

		</form>
	</div>

</body>
</html>