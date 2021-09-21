<?php
	include_once 'includes/hmdb.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>regpg</title>
    <link rel="stylesheet" href="static3/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="static3/fonts/ionicons.min.css">
    <link rel="stylesheet" href="static3/css/Footer-Dark.css">
    <link rel="stylesheet" href="static3/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="static3/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="static3/css/styles.css">
</head>

<body style="font-family: 'Alfa Slab One', cursive;background-image:url('static3/img/meeting.jpg'); ">
    <div class="register-photo " style="background-color: #3AAFA9;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin: 0px 0px 35px;background-color: #2B7A78;">
            <div class="container"><a class="navbar-brand" href="#" style="font-size: 40px;margin: 0px 315px; ">HEALTH MANIAC</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <a class="login" onclick="window.location.href='home.html';" >HOME</a>
                    <div class="collapse navbar-collapse" id="navcol-1" style="margin: 0px 20px 0px;">
                        <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"> </span></div><a class="btn btn-light action-button" role="button" href="#" style="width: 250px;background-color: #2B7A78;font-size: 16px;height: 60px;" onclick="window.location.href='login.html';">LOG IN</a></div>
        </nav>
        <div class="form-container" style="background-image:url('static3/img/register.jpg');">
        <div class="image-holder" ></div>
            <form action="includes/manage_users.php" method="post" style="background-color: #def2f1;">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required></div>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
                <div class="form-group"><input class="form-control" type="date" name="dob" placeholder="DOB" required></div>
                <div class="form-group" ><p>Select Gender</p>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label></div>
				<div class="form-group" ><p>Select Type of Account</p>
                    <input type="radio" id="patient" name="type" value="patient">
                    <label for="male">Patient</label><br>
                    <input type="radio" id="doctor" name="type" value="doctor">
                    <label for="female">Doctor</label><br>
                    <input type="radio" id="chemist" name="type" value="chemist">
                    <label for="other">Chemist</label></div>
                <div class="form-group"><input class="form-control" type="text " name="address" placeholder="Address" required></div>
                <div class="form-group"><input class="form-control" type="tel" name="phone" placeholder="Contact number" required></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required></div>
                <div class="form-group">
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #17252A;">Sign Up</button></div></form>
                </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>HEALTH MANIAC</h3>
                        <p>Web application to <strong>book appointments,buy medicines</strong> directly from your phone.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="static3/js/jquery.min.js"></script>
    <script src="static3/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>