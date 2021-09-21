<?php
	include_once 'includes/hmdb.php';
	if(!isset($_SESSION['user_id']) or $_SESSION['type'] != 'doctor'){
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
    <header></header>
    <?php
		if(isset($_GET['request_sent'])){
			echo "<center><p style=\"color:white;background-color:green\">Request successfully sent</p></center>";
		}
	?>
	<div >
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
                <div class="container" ><a class="navbar-brand" style="font-family: 'Abril Fatface', cursive;font-size: 60px;color: #17252a;" href="home.php"><em>Health Maniac</em></a><button class="btn btn-primary" onclick="window.location.href='includes/logout.php'" type="button" style="width: 115px;font-family: 'Abril Fatface', cursive;background-color:#17252a;"><em>LOG OUT</em></button>
                    <button
                        class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center" style="font-family: 'Abril Fatface', cursive;font-size: 120px;color: #17252a;"><em>Welcome&nbsp; Back Doctor!</em></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #def2f1">
        <div class="container" >
            <div class="row">
                <div class="col-md-4"><a href="docappo.php"><img class="border rounded border-dark shadow-sm" data-bs-hover-animate="pulse" src="assetend/img/docappoi.jpg" style="width: 375px;margin-top: 52px;margin-right: 0px;margin-bottom: 10px;margin-left: 135px;height: 250px;"></a></div>
                <div class="col-md-4"
                    style="margin-left: 90px;margin-top: 52px;margin-bottom: 10px;"><a href="docprescrip.php"><img class="border rounded border-dark shadow" data-bs-hover-animate="pulse" style="width: 375px;height: 250px;margin-left: 164px;" src="assetend/img/docpres.jpg"></a></div>
            </div>
        </div>
    </div>
    <div></div>
    <script src="assetend/js/jquery.min.js"></script>
    <script src="assetend/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetend/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assetend/js/agency.js"></script>
</body>

</html>