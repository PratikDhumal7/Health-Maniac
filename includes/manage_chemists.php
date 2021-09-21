<?php

	include_once 'hmdb.php';
	
	$username = $_POST['username'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone_no'];
	$email = $_POST['email'];
	$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO chemists(username, name, location, phone_no, email, password) VALUES('$username', '$name', '$address', '$phone' , '$email', '$password_hash')";
	
	$verify = mysqli_query($conn, $sql);
	
	if($verify){
		header("Location: ../home.php?registration=success");
	} else {
		header("Location: ../chemregister.php?registration=failed");
	}