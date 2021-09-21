<?php
	include_once 'includes/hmdb.php';
	$username = "";
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		if($_SESSION['type'] == "patient"){
			$type_port = "pat_port.php";
		} else if($_SESSION['type'] == "doctor"){
			$type_port = "doc_port.php";
		} else if ($_SESSION['type'] == "chemist"){
			$type_port = "chem_port.php";
		} else {
			$type_port = "admin_port.php";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
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

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="font-family: 'Abril Fatface', cursive;background-color: #17252a;">
        <div class="container"><a class="navbar-brand" href="#page-top" style="font-size: 70px;font-family: 'Abril Fatface', cursive;color: rgb(255,255,255);">Health Maniac</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
				<?php
					if(!isset($_SESSION['user_id'])){
						echo "<ul class=\"nav navbar-nav ml-auto text-uppercase\">
							<li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link js-scroll-trigger\" href=\"login.php\" style=\"font-family: 'Abril Fatface', cursive;font-size: 20px;\">LOGIN</a></li>
							<li class=\"nav-item\" role=\"presentation\" style=\"font-family: 'Abril Fatface', cursive;font-size: 23px;margin-top: 18px;\">
								<div class=\"nav-item dropdown show\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\" href=\"#\" style=\"font-size: 20px;color: rgb(255,255,255);\">REGISTER&nbsp; AS</a>
									<div class=\"dropdown-menu show\" role=\"menu\"><a class=\"dropdown-item\" role=\"presentation\" href=\"patreg.php\" style=\"font-size: 20px;\">Patient</a><a class=\"dropdown-item\" role=\"presentation\" href=\"chemregister.php\" style=\"font-size: 20px;\">CHEMIST</a>
										<a
											class=\"dropdown-item\" role=\"presentation\" href=\"doctorreg.php\" style=\"font-size: 20px;\"><em>DOCTOR</em></a>
									</div>
								</div>
							</li>
						</ul>";
					} else {
						echo "<ul class=\"nav navbar-nav ml-auto text-uppercase\">
							<li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link js-scroll-trigger\" href=\"$type_port\" style=\"font-family: 'Abril Fatface', cursive;font-size: 10px;\">Logged in as $username</a></li>
							<li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link js-scroll-trigger\" href=\"includes/logout.php\" style=\"font-family: 'Abril Fatface', cursive;font-size: 10px;\">Logout</a></li>
						</ul>";
					}
				?>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assetend/img/bghm.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span style="font-family: 'Abril Fatface', cursive;font-size: 77px;color: rgb(0,0,0);">Welcome To Health Maniac!!</span></div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright" style="font-family: 'Abril Fatface', cursive;color: rgb(0,0,0);font-size: 23px;">Copyright&nbsp;© Health Maniac 2021</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks" style="font-family: 'Abril Fatface', cursive;font-size: 26px;color: rgb(255,255,255);">
                        <li class="list-inline-item"><a href="#" style="color: rgb(0,0,0);">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#" style="color: rgb(0,0,0);">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assetend/js/jquery.min.js"></script>
    <script src="assetend/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetend/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assetend/js/agency.js"></script>
</body>

</html>