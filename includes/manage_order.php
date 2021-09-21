<?php

	include_once 'hmdb.php';
	@$type = $_SESSION['type'];
	@$order_id = $_GET['order_id'];
	@$status = $_GET['status'];
	if(!isset($_SESSION['user_id']) or $type != 'chemist'){
		header("Location: home.php");
	} else if(!isset($order_id) or !isset($status)) {
		header("Location: chem_port.php?error=1");
	}
	
	$toaddr = mysqli_fetch_array(mysqli_query($conn, "SELECT email FROM patients, orders WHERE id=pat_id AND order_id=$order_id"))[0];
	$verify = mysqli_query($conn, "UPDATE orders SET status=$status WHERE order_id=$order_id");
	
	if($verify){
		exec("python sendmail.py $toaddr $order_id $status");
		header("Location: ../chem_port.php");
	} else {
		header("Location: ../chem_port.php?error=2");
	}