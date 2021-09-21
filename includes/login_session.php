<?php

	include_once 'hmdb.php';
	include_once 'login.php';
	
	if(isset($_SESSION['user_id'])){
		if($_SESSION['type'] == "patient"){
			header("Location: ../pat_port.php");
		} else if($_SESSION['type'] == "doctor") {
			header("Location: ../doc_port.php");
		} else if($_SESSION['type'] == "chemist"){
			header("Location: ../chem_port.php");
		} else {
			header("Location: ../admin_port.php");
		}
	} else {
		header("Location: ../login.php?login=failed");
	}