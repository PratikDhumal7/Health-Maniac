<?php

	include_once 'hmdb.php';
	
	$patient_id = $_SESSION['user_id'];
	$app_date = $_POST['app_date'];
	$hosp_name = $_POST['hospital'];
	$slot = $_POST['slot'];
	$doctor_name = $_POST['doctor'];

	$doctor_id = mysqli_fetch_row(mysqli_query($conn, "SELECT id FROM doctors WHERE name='$doctor_name'"))[0];
	$hosp_id = mysqli_fetch_row(mysqli_query($conn, "SELECT hosp_id FROM hospitals WHERE name='$hosp_name'"))[0];
	
	$sql = "SELECT app_id FROM appointments WHERE app_date='$app_date' AND doctor_id=$doctor_id AND hosp_id=$hosp_id AND slot=$slot AND cancelled=0";
	$unavailable = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($unavailable) == 0){
		$sql = "INSERT INTO appointments(doctor_id, patient_id, app_date, slot, hosp_id) VALUES('$doctor_id', '$patient_id', '$app_date', '$slot', '$hosp_id')";

		$verify = mysqli_query($conn, $sql);
		if($verify){
			header("Location: ../appointmentconfirmed.php");
		} else {
			header("Location: ../book.php?appointment=failed&error=2");
		}
	} else {
		header("Location: ../book.php?appointment=failed&error=1");
	}