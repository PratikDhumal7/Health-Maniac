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
    <div class="register-photo" style="background-color: #3aafa9;">
        <div class="form-container">
            <div class="image-holder" style="width: 75%;margin-right: 0px;margin-left: 0px;"></div>
            <form method="post" action="includes/manage_chemists.php" style="font-family: 'Abril Fatface', cursive;width: 320px;background-color: #def2f1;">
                <h2 class="text-center" style="font-family: 'Abril Fatface', cursive;font-size: 41px;color:#17252a;">Register Now!!</h2>
                <div class="form-group"><input class="form-control" name="username" placeholder="Username" type="text"></div>
                <div class="form-group"><input class="form-control" name="name" placeholder="Name" type="text">
                    <input class="form-control" type="text" name="address" placeholder="Delivery Location" style="margin-top: 12px;"></div>
                <div class="form-group"><input class="form-control" name="phone_no" placeholder="Store Contact"type="number"></div>
                <div class="form-group"><input class="form-control" name="email" placeholder="Email" type="email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="font-family: 'Abril Fatface', cursive;background-color: #17252a;color: #feffff;font-size: 25px;">Sign Up</button></div>
            </form>
        </div>
    </div>
    <script src="assetend/js/jquery.min.js"></script>
    <script src="assetend/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetend/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assetend/js/agency.js"></script>
</body>

</html>