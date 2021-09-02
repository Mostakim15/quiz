<?php 
	include 'db.php';
	session_start(); 

	//			Set Question Numbe			//
	$number = $_GET['n'];


	//	Query for the Question	//
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question 	//
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//	Get Choices	//
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($connection,$query);

	// Get Total questions	//
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>IQ Test started</title>
	<link rel="shortcut icon" href="img/logo.png">
</head>
<body>

	<header>
		<div class="container bg-dark text-white">
		<h1><img src="img/logo.png" alt="logo">IQ Test</h1>
		</div>
	</header>

	<main>
			<div class="container bg-dark text-white">
				<div class="current bg-dark text-white">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
				<p class="question"><?php echo $question['question_text']; ?> </p>
				<form method="POST" action="process.php">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['coption']; ?></li>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<?php
					if($number>1){?>
					<a class="btn text-white bg-primary" href="question.php?n=<?php echo $number-1; ?>">Back</a>
					<?php }
					else{?>
						<a class="btn text-white bg-primary" href="main.php">Back</a>
					<?php } ?>
					<input type="submit" name="submit" value="Submit">
					
					


				</form>
				

			</div>

	</main>
	<script src="./js/jquery-3.6.0.slim.min.js"></script>
    <script src=".js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>