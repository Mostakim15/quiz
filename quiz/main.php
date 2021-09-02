<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Quiz</title>
	<link rel="icon" href="img/logo.png">
</head>
<body>


	<main>
			<div class="container" style="background-color: #F4F8FC;">
				<h1><img src="img/logo.png" alt="logo">Quiz</h1>
				<h3>
					This is a multiple choise quiz to test
				</h3>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="btn clr start">Start the Test</a>

			</div>

	</main>


	<script src="./js/jquery-3.6.0.slim.min.js"></script>
    <script src=".js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	
</body>
</html>