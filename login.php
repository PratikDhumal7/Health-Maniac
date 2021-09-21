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
    <div class="login-dark">
        <form method="post" action='includes/login_session.php' method="post" style="background-color: #3aafa9;height: 338px;margin-top: 122px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" style="margin-top: 41px;"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
			<div class="form-group" ><p>Select Type of Account</p>
                    <input type="radio" id="patients" name="type" value="patient">
                    <label for="patients">Patient</label><br>
                    <input type="radio" id="doctors" name="type" value="doctor">
                    <label for="doctors">Doctor</label><br>
                    <input type="radio" id="chemists" name="type" value="chemist">
                    <label for="chemists">Chemist</label></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #17252a;">Log In</button></div>
        </form>
    </div>
    <script src="assetend/js/jquery.min.js"></script>
    <script src="assetend/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetend/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assetend/js/agency.js"></script>
</body>

</html>