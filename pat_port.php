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
    <title>Services - Brand</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="static/css/smoothproducts.css">
</head>

<body>
    <main class="page service-page" >
        <section class="clean-block clean-services dark" style="background-color: #3aafa9;">
            <div class="container" >
                <div class="block-heading">
                    <h1
                        style="font-family: 'Alfa Slab One', cursive;font-style: normal;font-size: 65px;color: #17252A;">
                        PATIENT PORTAL<button class="btn btn-primary" type="button" onclick="window.location.href='includes/logout.php'" style="margin-left: 275px;color: #feffff;background-color: #17252a;margin-left: 1000px;"><em>LOG OUT</em></button></h1>
                    <h1 class="text-info"
                        style="width: 1110px;background-color: rgba(0,0,0,0.9);filter: blur(0px) saturate(127%);height: 180PX;margin: 1px 1px 1px;padding: 3px;background-image: url(&quot;static/img/people-hospital-hall-patients-doctors-team-clinic-waiting-room-horizontal-banner_48369-18767.jpg&quot;);color: rgb(5,14,58);font-size: 70px;font-family: 'Alfa Slab One', cursive;">
                        <br>
                    </h1>
                </div>
                <div class="row" style="margin-left: 160px;">
                    <div class="col-md-6 col-lg-4" ><img
                            src="static/img/doctor-appointment-icon-flat-style-vector-eps-doctor-appointment-icon-flat-style-vector-eps-154239786.jpg"
                            style="width: 345px;height: 340px;">
                        <div class="btn-group" role="group"></div><button class="btn btn-primary" type="button"
                            style="margin: 59px;padding: 8px 75px;width: 250px;height: 70px;background-color:#17252A;;margin-top: 36px;"                            onclick="window.location.href='book.php';">BOOK APPOINTMENT</button>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 offset-xl-0" style="height: 500px; margin-left: 180px;">
                        <div class="card" style="width: 345px;"><img class="card-img-top w-100 d-block"
                                src="static/img/banner-7e65f517874a54f7dadb8d96c244d0f337babde9b4a0c060c702e07fa9afd681.svg"
                                style="width: 385px;height: 340px;margin: 0px;"></div><button class="btn btn-primary"
                            type="button"
                            style="width: 250px;height: 70px;margin: 28px;padding: 8px 75px;background-color:#17252A;;margin-left: 65px;"
                            onclick="window.location.href='buymed.php';">BUY MEDICINES</button>
                    </div>
                </div>
                <div class="row"  style="margin-left: 160px;">
                    <div class="col-md-6 col-lg-4">
                        <div class="card" style="width: 345px;"><img class="card-img-top w-100 d-block"
                                src="static/img/cancel-calendar-glyph-color-vector-icon-cancel-calendar-vector-icon-elements-mobile-concept-web-apps-thin-line-icons-146390058.jpg"
                                style="width: 405px;height: 340px;background-color: #412929;"></div><button
                            class="btn btn-primary" type="button"
                            style="width: 250px;height: 70px;padding: 8px 75px;margin: 28px;background-color:#17252A;;"
                            onclick="window.location.href='cancel.php';">CANCEL APPOINTMENT</button>
                    </div>
                    <div class="col-md-6 col-lg-4" style="margin-left: 70px;  margin-left: 180px;">
                        <div class="card" style="width: 345px;"><img class="card-img-top w-100 d-block"
                                src="static\img\view.png"
                                style="width: 345px;height: 340px;background-color: #412929;"></div><button
                            class="btn btn-primary" type="button"
                            style="width: 250px;height: 70px;padding: 8px 75px;margin: 28px;background-color:#17252A;; margin-left: 65px;"
                            onclick="window.location.href='pat_view_apps.php';">VIEW APPOINTMENTS</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>
    <script src="static/js/jquery.min.js"></script>
    <script src="static/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="static/js/smoothproducts.min.js"></script>
    <script src="static/js/theme.js"></script>
</body>

</html>