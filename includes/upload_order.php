<?php
	include_once 'hmdb.php';
	if(!isset($_POST['chem_id']) or strlen($_POST['chem_id'])<1){
		header("Location: ../buymed.php?error=1");
	} else if (!isset($_POST['address']) or strlen($_POST['address'])<5){
		header("Location: ../buymed.php?error=5");
	} else if (!isset($_SESSION['user_id'])){
		header("Location: ../buymed.php?error=2");
	} else if (!isset($_FILES['order'])){
		header("Location: ../buymed.php?error=3");
	}  
	
	$user_id = $_SESSION['user_id'];
	$address = $_POST['address'];
	$order_id = mysqli_query($conn, "SELECT MAX(order_id) FROM orders");
	if($order_id == TRUE) {
		$order_id = 0;
	} else {
		$order_id = mysqli_fetch_array($order_id)[0]+1;
	}
	$chem_id = $_POST['chem_id'];
	$target_dir = "../orders/";
	$ext = end(explode('.', $_FILES['order']['name']));
	$file_name = $user_id . "_" . $order_id . "_order" . "." . $ext;
	move_uploaded_file($_FILES['order']['tmp_name'], $target_dir . $file_name);
	
	$sql = "INSERT INTO orders(chem_id, pat_id, order_name, address) VALUES($chem_id, $user_id , '$file_name', '$address')";
	$verify = mysqli_query($conn, $sql);
	
	
	if($verify){
		header("Location: ../buymed.php?order=successful");
	} else {
		header("Location: ../buymed.php?error=4");
	}