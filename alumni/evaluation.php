<?php
 require 'connect.php';



if (isset($_POST['submit']))
{

	$impact = $_POST['impact'];
	$answers = $_POST['answer'];
	$recommendation = $_POST['recommendation'];

	$sql = "INSERT INTO evaluation(impact, answer, recommendation) VALUES('$impact', '$answers', '$recommendation')";

	if ( $mysqli->query($sql) === TRUE)
        {
            echo "<script>alert('Thank you for completing evaluation form.')</script>";
        } 
    else
        {
            echo "Error: " . $sql . "<br>" .$mysqli->error;
        }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Evaluation</title>
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
			background: #12689a;
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
		.container .form .input {
			width: 100%;
			height: 100px;
			margin-bottom: 50px;
		}
		.container .form .input label { 
			font-weight: 800;
			margin-bottom: 5px;
			display: block;
			font-size: 1.2rem;
		 }
		 .container .form .input textarea {
		 	width: 100%;
			height: 100%;
			border: 1px solid #12689a;
			outline: none;
			padding:5px 10px;
		 }
		.container .form .input.textarea {
			height: 200px;
		}
		.container .form .input.textarea input 
		{
			font-weight: 800;
			margin-bottom: 5px;
			
			font-size: 1.2rem;
		}
		.container .form .input.textarea textarea {
			resize: none;
		}
		.container .form .input .btn 
		{
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
		.container .form .input .btn:hover {
			opacity: 1;
		}
		.container .form .input a 
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
	<div class="container">
		<h3>Evaluation form</h3>
		<form  class="form" method="POST" action="">
			<div class="input textarea">
				<label>How has KASNEB course impacted your career?</label>
				<textarea id="impact" name="impact" placeholder="Type here" required></textarea>
			</div>
			<div class="input textarea">
				<label>Can you recommend KASNEB courses to other people?</label>
				<input type="radio" name="answer" value="Yes">Yes
				<input type="radio" name="answer" value="No">No	
				
				<textarea id="recommendation" name="recommendation" placeholder="Kindly explain why" required></textarea>
			</div>
			<div class="input">
				<button class="btn" name="submit">Submit</button>
				<a href="index.php">Back</a>
			</div>
		</form>
	
	</div>
</body>
</html>