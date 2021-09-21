<?php

	include_once 'hmdb.php';
	@$type = $_SESSION['type'];
	if(!isset($_SESSION['user_id']) or ($type != 'patient' or $type != 'ADMIN')){
		header("Location: home.php");
	}
	
	if($type == 'patient'){
		$app_id = $_POST['app_id'];
		$patient_id = $_SESSION['user_id'];
		$sql = "UPDATE appointments SET cancelled=1 WHERE app_id=$app_id AND patient_id=$patient_id";
	} else {
		$app_id = $_GET['app_id'];
		$sql = "UPDATE appointments SET cancelled=1 WHERE app_id=$app_id";
	}
	
	
	$verify = mysqli_query($conn, $sql);
	
	if($verify){
		if($type == "patient"){
			header("Location: ../appointmentcancelled.php");
		} else {
			header("Location: ../appointmentcancelledadmin.php");
		}
	} else {
		header("Location: ../cancel.php?error=1");
	}