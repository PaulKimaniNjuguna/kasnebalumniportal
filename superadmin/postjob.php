<?php
require 'connect.php';

if (isset($_POST['submit'])) 
{
	
	
	$company = $_POST['company'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$qualifications = $_POST['qualifications'];

	
	


	if (str_contains("/^[A-Za-z]\w+$/", $company)) {
		return TRUE;
	}

	else if (str_contains("/^[A-Za-z]\w+$/", $title)) {
		return TRUE;
	}
	

	
	else 
	{
		$sql = "INSERT INTO jobs (company, title, description, qualifications) VALUES ('$company', '$title', '$description', '$qualifications')";
	
	 if ( $mysqli->query($sql) === TRUE)
        {
            echo "<script>alert('Job added.')</script>";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
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
			border: 1px solid #12689a;
			outline: none;
			padding:5px 10px;
		}
		.wrapper .form .input-group textarea{
			width: 100%;
			height: 100%;
			border: 1px solid #12689a;
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
		.wrapper .form .input-group a 
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
			<button class="btn" name="submit">Post job</button>
			<a href="index.html">Back</a>
		</div>
		</form>
	</div>

</body>
</html>