<?php 

session_start();

?>

<html>
<head>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>IQ Test finished</title>
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
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				<a href="index.php" class="btn btn-success start">Back to home</a>
				
			</div>

	</main>

	<script src="./js/jquery-3.6.0.slim.min.js"></script>
    <script src=".js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>