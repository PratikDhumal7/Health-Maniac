<?php
	include_once 'includes/hmdb.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>capp</title>
    <link rel="stylesheet" href="static2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="static2/fonts/ionicons.min.css">
    <link rel="stylesheet" href="static2/css/Footer-Basic.css">
    <link rel="stylesheet" href="static2/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="static2/css/styles.css">
</head>

<body>
    <header></header>
	<!-- <?php
		if(isset($_GET['error'])){
			echo "<center><p style=\"color:white;background-color:green\">Request successfully sent</p></center>";
		}
	?> -->
    <div class="align-content-center register-photo" style="background-color: #def2f1;">
        <h1 class="text-center justify-content-center align-items-center align-content-center align-self-center flex-wrap order-6 m-auto" style="color: #17252a;font-family: 'Alfa Slab One', cursive;font-size: 50px;background-color: #def2f1;width: 940px;margin: 5px;">CANCEL APPOINTMENT</h1>
        <div class="form-container">
            <form action="includes/cancel_appointment.php" method="post">
                <h2 class="text-center" style="color: #17252a;background-color: #def2f1;font-family: 'Alfa Slab One', cursive;height: 40PX;">ENTER YOUR APPOINTMENT DETAILS</h2>
                <div class="form-group"><input class="form-control" type="number" required name="app_id" placeholder="APPOINTMENT ID"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><strong>CONFIRM THE CANCELLATION</strong></label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="color: #feffff;font-family: 'Alfa Slab One', cursive;font-size: 30px;background-color: #2b7a78;">CANCEL APPOINTMENT</button></div>
            </form>
        </div><center><button class="btn btn-primary text-capitalize text-center flex-row-reverse flex-fill justify-content-center align-items-center align-content-center align-self-center" type="button" style="font-family: 'Alfa Slab One', cursive;font-size: 25px;background-color: #17252a;width: 780px;margin: 10px 275px;height: 52px;padding: 3px;" onclick="window.location.href='book.php';">BOOK ANOTHER APPOINTMENT</button></center></div>
    <div
        class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Health Maniac © 2017</p>
        </footer>
        </div>
        <script src="static2/js/jquery.min.js"></script>
        <script src="static2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>