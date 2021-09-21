<?php

	include_once 'hmdb.php';
	
	$username = $_POST['username'];
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$phone = $_POST['phone_no'];
	$email = $_POST['email'];
	$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO patients(username, name, dob, gender, address, phone_no, email, password) VALUES('$username', '$name', '$dob', '$gender', '$address', '$phone' , '$email', '$password_hash')";
	
	$verify = mysqli_query($conn, $sql);
	
	if($verify){
		header("Location: ../home.php?registration=success");
	} else {
		header("Location: ../patreg.php?registration=failed");
	}