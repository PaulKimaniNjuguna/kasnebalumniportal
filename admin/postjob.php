<?php
require 'C:/xampp/htdocs/Kasneb/connect.php';

if (isset($_POST['submit'])) {
	
	$url = array("http", "https");
	$company = $_POST['company'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$qualifications = $_POST['qualifications'];
	$url = $_POST['url'];
	


	if (!preg_match("/^[A-Za-z]+$/", $company)) {
		echo "<script>alert(Company name must contain only alphabets and spaces.)</script>";
	}

	else if (!preg_match("/^[A-Za-z]+$/", $title)) {
		echo "<script>alert('Title must contain only alphabets and spaces.')</script>";
	}
	
	
	elseif (!array_key_exists(0, $url)) {
		echo "<script>alert('Invalid url')</script>";
	}
	
	else {
		$sql = "INSERT INTO jobs (company, title, description, qualifications, url) VALUES (?, ?, ?, ?, ?)";
	
	$result = mysqli_query($mysqli, $sql);
	
	if ($result) {
		echo "<script>alert('Job has been added.')</script>";
	}}

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
			min-height: 600px;
		}
		.wrapper h3{
			text-align: center;
			text-decoration: underline;
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
		.wrapper .form .input-group input  {
			width: 100%;
			height: 100%;
			border: 1px solid #00b894;
			outline: none;
			padding:5px 10px;
		}
		.wrapper .form .input-group textarea{
			width: 100%;
			height: 100%;
			border: 1px solid #00b894;
			outline: none;
			padding:5px 10px;
		}
		.wrapper .form .input-group.textarea {
			
			height: 130px;
		}
		.wrapper .form .input-group.textarea textarea {
			resize: none;
		}
		.wrapper .form .input-group .btn {
			margin: 20px 0;
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
	</style>
</head>
<body>
	
	<div class="wrapper">
		<h3>Post job here</h3>
		<form class="form" method="POST" action="">
		<div class="row">
			<div class="input-group">
				<label>Company name</label>
				<input type="text" name="company" id="company" placeholder="Enter the company" required>
			</div>
			<div class="input-group">
				<label>Title</label>
				<input type="text" name="title" id="title" placeholder="Enter the job title" required>
			</div>
		</div>
		<div class="input-group textarea">
			<label>Description</label>
			<textarea id="description" name="description" placeholder="Enter job description" required></textarea>
		</div>
		<div class="input-group textarea">
			<label>Qualifications</label>
			<textarea name="qualifications" id="qualifications" placeholder="Enter job qualifications"></textarea>
		</div>
		<div class="input-group">
				<label>Apply here</label>
				<input type="url" name="applicationlink" id="applicationlink" placeholder="Enter URL here" required>
			</div>
		<div class="input-group">
			<button class="btn" name="submit">Post job</button>
		</div>
		</form>
	</div>

</body>
</html>