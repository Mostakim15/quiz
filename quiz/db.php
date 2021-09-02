<?php

	$connection = $conn = mysqli_connect('localhost', 'root', '', 'quiz');
	if(mysqli_connect_errno()){ 
		die("Database Connection Failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
	}

?>