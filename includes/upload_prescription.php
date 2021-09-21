<?php
	include_once 'hmdb.php';
	if(!isset($_GET['app_id'])){
		header("Location: ../docprescrip.php?error=1");
	} else if (!isset($_FILES['prescription'])){
		header("Location: ../docprescrip.php?error=2");
	} 
	
	$app_id = $_GET['app_id'];
	$target_dir = "../prescriptions/";
	$ext = end(explode('.', $_FILES['prescription']['name']));
	$file_name = $app_id . "_prescription" . "." . $ext;
	move_uploaded_file($_FILES['prescription']['tmp_name'], $target_dir . $file_name);
	
	$sql = "UPDATE appointments SET prescription='$file_name' WHERE app_id=$app_id";
	$verify = mysqli_query($conn, $sql);
	
	
	if($verify){
		header("Location: ../doc_port.php?prescription_upload=successful");
	} else {
		header("Location: ../docprescrip.php?error=3");
	}