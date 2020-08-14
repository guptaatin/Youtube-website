<?php

	$con = mysqli_connect('localhost:3307', 'root');
	
	if(mysqli_connect_error()) {
		
		echo "There was an error connecting to the database";
		
	} else {
		
		echo "Database connection successful!";
		
	}

	mysqli_select_db($con, 'youtubeuserdata');
	
	$user = $_POST['user'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$comments = $_POST['comment'];
	
	$query = "insert into userinfodata (user, email, mobile, comment) values ('$user', '$email', '$mobile', '$comments')";
	
	mysqli_query($con, $query);
	
	header('location:index.php');

?>