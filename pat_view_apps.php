<?php
	include_once 'includes/hmdb.php';
	if(!isset($_SESSION['user_id']) or $_SESSION['type'] != 'patient'){
		header("Location: home.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>hm</title>
    <link rel="stylesheet" href="assetend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assetend/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assetend/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assetend/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assetend/css/Registration-Form-with-Photo.css">
</head>

<body>
    <header>
        <h1 style="font-family: 'Abril Fatface', cursive;font-size: 60px;margin-left: 28%;margin-right: 28%;width: 100%;"><em>Your Appointments</em><a class="btn btn-primary" role="button" style="width: 95px;margin-left: 275px;color: #feffff;font-size: 20px;background-color: #17252a;" href="pat_port.php"><em>Back</em></a></h1>
    </header>
    <div></div>
    <div class="table-responsive" style="background-color: #3aafa9;">
        <table class="table">
            <thead>
                <tr>
                    <th><em>Appointment ID</em></th>
                    <th><em>Appointment Date</em></th>
                    <th><em>Slot</em></th>
                    <th><em>Hospital</em></th>
                    <th><em>Doctor</em></th>
                    <th><em>Address</em></th>
                    <th><em>Prescription</em></th>
                </tr>
            </thead>
            <tbody>
                <?php
					$patient_id = $_SESSION['user_id'];
					$result = mysqli_query($conn, "SELECT appointments.app_id, appointments.app_date, appointments.slot, hospitals.name AS hname, doctors.name AS dname, hospitals.address  FROM hospitals,appointments,doctors WHERE appointments.patient_id=$patient_id AND appointments.cancelled=0 AND doctors.id=appointments.doctor_id AND appointments.hosp_id=hospitals.hosp_id");					
					
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						foreach($row as $field=> $value){
							$app_id = $row['app_id'];
							echo "<td>" . $value . "</td>";
						}
						$pres = mysqli_fetch_array(mysqli_query($conn, "SELECT prescription FROM appointments WHERE app_id=$app_id"))[0];
						if(is_null($pres)){
							echo "<td>" . "Not available" ."</td>";
						} else {
							echo "<td><a href='prescriptions/$pres'>" . "Download" . "</a></td>";
						}
						echo "</tr>";
					}
				?>
            </tbody>
        </table>
    </div>
    <script src="assetend/js/jquery.min.js"></script>
    <script src="assetend/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetend/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assetend/js/agency.js"></script>
</body>

</html>