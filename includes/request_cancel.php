<?php

	include_once 'hmdb.php';
	
	if(!isset($_SESSION['user_id']) or $_SESSION['type'] != 'doctor'){
		header("Location: ../home.php");
	}
	
	if(!isset($_GET['app_id'])){
		header("Location: ../docappo.php?error=1");
	}
	
	$doc_id = $_SESSION['user_id'];
	$app_id = $_GET['app_id'];
	
	$sql = "INSERT INTO cancel_requests(app_id, doc_id) VALUES($app_id, $doc_id)";
	$verify = mysqli_query($conn, $sql);
	
	if($verify){
		header("Location: ../doc_port.php?request_sent=1");
	} else {
		header("Location: ../docappo.php?error=2");
	}