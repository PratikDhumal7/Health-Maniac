<?php
	include_once 'includes/hmdb.php';
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
    <center><h1 style="font-family: 'Abril Fatface', cursive;font-size: 81px; color: #17252a;"><em>Admin Portal</em></center></h1>
	<center><button class="btn btn-primary" type="button" onclick="window.location.href='includes/logout.php'" style="width: 115px;height: 40px;color: #feffff;background-color: #17252a;"><em>LOG OUT</em></button></center>
    <div>
        <p style="font-family: 'Abril Fatface', cursive;font-size: 45px;color: #2b7a78;"><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Manage Appointments</em></strong></p>
    </div>
    <div style="background-size: 100%;background-color: #2b7a78;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="font-size: 20px;">
                        <th><em>Patient Name</em></th>
                        <th><em>Doctor Name</em></th>
                        <th style="width: 399px;"><em>Appointment Number</em></th>
                        <th style="margin-left: 0px;width: 359px;"><em>Cancel Appointment</em></th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$result = mysqli_query($conn, "SELECT patients.name AS pname, doctors.name AS dname, cancel_requests.app_id FROM patients,doctors,appointments,cancel_requests WHERE appointments.cancelled=0 AND patients.id=appointments.patient_id AND doctors.id=appointments.doctor_id AND appointments.app_id=cancel_requests.app_id");
					
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						foreach($row as $field=> $value){
							$app_id = $row['app_id'];
							echo "<td>" . $value . "</td>";
						}
						echo "<td style=\"margin-left: 0px;width: 250px;\"><button class=\"btn btn-primary\" type=\"button\" style=\"color: rgb(0,0,0);\" onclick=\"window.location.href='includes/cancel_appointment.php?app_id=$app_id'\"><em>Confirm cancellation</em></button></td>";
						echo "</tr>";
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assetend/js/jquery.min.js"></script>
    <script src="assetend/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetend/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assetend/js/agency.js"></script>
</body>

</html>