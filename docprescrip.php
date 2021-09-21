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
    <header>
        <h1 style="font-family: 'Abril Fatface', cursive;font-size: 60px;margin-left: 28%;margin-right: 28%;width: 100%;"><em>Upload Prescriptions</em><a class="btn btn-primary" role="button" style="width: 95px;margin-left: 275px;color:#feffff;font-size: 20px;background-color: #17252a;" href="doc_port.php"><em>Back</em></a></h1>
    </header>
    <div></div>
    <div class="table-responsive" style="background-color: #3aafa9;">
        <table class="table">
            <thead>
                <tr>
                    <th><em>Appointment ID</em></th>
                    <th><em>Appointment Date</em></th>
                    <th>Slot</th>
                    <th><em>Name</em></th>
                    <th><em>Contact Number</em></th>
                    <th>Upload Prescription</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
				<?php
					$doc_id = $_SESSION['user_id'];
					$result = mysqli_query($conn, "SELECT appointments.app_id, appointments.app_date, appointments.slot, patients.name, patients.phone_no FROM patients,appointments WHERE doctor_id=$doc_id AND prescription IS NULL AND cancelled=0 AND appointments.app_id AND patients.id=appointments.patient_id ORDER BY appointments.app_date");
					
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						$app_id = $row['app_id'];
						foreach($row as $field=> $value){
							echo "<td>" . $value . "</td>";
						}
						echo "<td style=\"margin-left: 0px;width: 250px;\"><form method=\"post\" action=\"includes/upload_prescription.php?app_id=$app_id\" enctype=\"multipart/form-data\">";

						echo '<input type="hidden" name="MAX_FILE_SIZE" value="900000"/><input name="prescription" type="file" style="height:35px;" /><br><br></td>';

						echo '<td><input type="submit" value="Upload">';

						echo '</form></td>';
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