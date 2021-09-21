<?php
	include_once 'includes/hmdb.php';
	@$hosp = $_GET['hosp'];
	@$error = $_GET['error'];
	if(!isset($_SESSION['user_id']) or $_SESSION['type'] != 'patient'){
		header("Location: home.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Book Appointment - HealthManiac</title>
    <link rel="stylesheet" href="static1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="static1/fonts/ionicons.min.css">
    <link rel="stylesheet" href="static1/css/Footer-Basic.css">
    <link rel="stylesheet" href="static1/css/Header-Dark.css">
    <link rel="stylesheet" href="static1/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="static1/css/styles.css">
</head>

<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.hospital.options[form.hospital.options.selectedIndex].value;
self.location='book.php?hosp=' + val ;
}
</script>

<body>
	<div>
	<?php 
		if(isset($error)){
			if($error == 1){
				echo "<center><p style=\"color:white;background-color:red\">Error - Slot unavailable</p></center>";
			} else {
				echo "<center><p>Error - Unknown error</p></center>";
			}
		}
	?>
	</div>
    <div></div>
    <center><h1 class="align-items-center align-content-center" style="width: 1000px;margin: 10px 190px 10px;color: #17252a;font-size: 65px;font-family: 'Alfa Slab One', cursive;filter: brightness(124%) contrast(104%) hue-rotate(0deg) invert(0%) saturate(135%) sepia(13%);" >BOOK AN APPOINTMENT</h1></center>
	<div class="register-photo" style="background-color: #3aafa9;">
        <div class="form-container" >
            <form class="text-center justify-content-center align-items-center align-content-center align-self-center align-self-sm-center align-self-md-center align-self-lg-center align-self-xl-center" action='includes/manage_appointments.php' method="post">
                <h2 class="text-center" style="background-color: #17252a;color:#def2f1;font-size: 35px;font-family: 'Alfa Slab One', cursive;"><strong>ENTER DETAILS</strong></h2>
                <div class="form-group">
                    <label for="sel1">Hospital:</label>
					<select name="hospital" onchange="reload(this.form)" class="form-control" id="hospital">
					<option value="">Select hospital</option>
					<?php 
						$sql = mysqli_query($conn, "SELECT name FROM hospitals WHERE 1");
						while ($row = $sql->fetch_assoc()){
							foreach($row as $field=>$value){
								if($value==@$hosp) {
									echo "<option value=\"$value\" selected>" . $value . "</option>";
								} else {
									echo "<option value=\"$value\">" . $value . "</option>";
								}
							}
						}
					?>
					</select>
                </div>
                <div class="form-group">
                    <label for="sel1">Doctor:</label>
					<select name="doctor" class="form-control" id="doctor">
					<option value="">Select doctor</option>
					<?php
						if(isset($hosp) and strlen($hosp) > 0){
							$hosp_id = mysqli_fetch_row(mysqli_query($conn, "SELECT hosp_id FROM hospitals WHERE name='$hosp'"))[0];
							$quer = "SELECT name FROM doctors where hosp_id=$hosp_id order by name"; 
						} else {
							$quer = "SELECT name FROM doctors order by name"; 
						} 
						$sql = mysqli_query($conn, $quer);
						while ($row = $sql->fetch_assoc()){
							foreach($row as $field=>$value){
								echo "<option value=\"$value\">" . $value . "</option>";
							}
						}
					?>
					</select>
                </div>
				<div class="form-group"> <label for="sel1">Appointment date:</label> <input class="form-control" type="date" name='app_date' placeholder="appointment date"></div>
				<div class="form-group">
                    <label for="sel1">Slot:</label>
					<select name="slot" class="form-control" id="slot">
					<option value="">Select slot</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					</select>
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox"><strong>CONFIRM DETAILS</strong></label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="font-family: 'Alfa Slab One', cursive;color: #def2f1;background-color: #17252a;" >CONFIRM APPOINTMENT</button></div>
            </form>
        </div>
        <footer></footer>
        <footer></footer>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="static1/js/jquery.min.js"></script>
    <script src="static1/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>