<?php

	include_once 'hmdb.php';
		
	$entered_name = $_POST['username'];
	$type = $_POST['type'] . "s";
	$entered_password = $_POST['password'];
	
	if($entered_name == "admin"){
		if($entered_password = "123321"){
			$_SESSION['user_id'] = 0;
			$_SESSION['username'] = 'ADMIN';
			$_SESSION['type'] = 'ADMIN';
		}
	} else {
	
		$sql = "SELECT password FROM $type WHERE username='$entered_name'";
		
		$password_hash = mysqli_query($conn, $sql);
		if($password_hash){
			$password_hash = mysqli_fetch_row($password_hash)[0];
		}
		
		$verify_login = password_verify($entered_password, $password_hash);
		if($verify_login){
			$sql = "SELECT id FROM $type WHERE username='$entered_name'";
			$_SESSION['user_id'] = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
			$_SESSION['username'] = $entered_name;
			$_SESSION['type'] = $_POST['type'];
		}
	}