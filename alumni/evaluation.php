<?php


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
		.container .form .input.textarea textarea {
			resize: none;
		}
		.container .form .input .btn {
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
		.container .form .input .btn:hover {
			opacity: 1;
		}
	</style>
</head>
<body>
	<div class="container">
		<form  class="form">
			<div class="input textarea">
				<label>How has KASNEB course impacted your career?</label>
				<textarea id="impact" name="impact" placeholder="Type here"></textarea>
			</div>
			<div class="input textarea">
				<label>Can you recommend KASNEB courses to other people?
				<input type="radio" name="answer" value="yes">Yes
				<input type="radio" name="answer" value="no">No	
				</label>
				<textarea id="impact" name="impact" placeholder="Kindly explain why"></textarea>
			</div>
			<div class="input">
				<button class="btn" name="submit">Submit</button>
			</div>
		</form>
	
	</div>
</body>
</html>