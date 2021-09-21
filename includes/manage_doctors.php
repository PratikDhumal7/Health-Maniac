<?php

	include_once 'hmdb.php';
	
	$username = $_POST['username'];
	$name = $_POST['name'];
	$hosp_name = $_POST['hosp_name'];
	$phone = $_POST['phone_no'];
	$email = $_POST['email'];
	$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
	$sql = "SELECT hosp_id FROM hospitals WHERE name='$hosp_name'";
	$hosp_id = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
	
	$sql = "INSERT INTO doctors(username, name, hosp_id, phone_no, email, password) VALUES('$username', '$name', $hosp_id, '$phone', '$email', '$password_hash')";
	
	$verify = mysqli_query($conn, $sql);
	
	if($verify){
		header("Location: ../home.php?registration=success");
	} else {
		header("Location: ../doctorreg.php?registration=failed");
	}