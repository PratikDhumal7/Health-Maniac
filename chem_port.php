<?php
	include_once 'includes/hmdb.php';
	if(!isset($_SESSION['user_id']) or $_SESSION['type'] != 'chemist'){
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
    <h1 style="font-family: 'Abril Fatface', cursive;font-size: 81px;"><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Chemist Portal</em>&nbsp; &nbsp; &nbsp; &nbsp;<button class="btn btn-primary" onclick="window.location.href='includes/logout.php'" type="button" style="width: 115px;font-family: 'Abril Fatface', cursive;background-color:#17252a;"><em>LOG OUT</em></button></h1>
    <div>
        <p style="font-family: 'Abril Fatface', cursive;font-size: 45px;color: #2b7a78;"><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; MANAGE YOUR STORE FROM HERE!!!</em></strong></p>
    </div>
    <div style="background-size: 100%;background-color: #3aafa9;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="font-size: 20px;">
                        <th><em>Order ID</em></th>
                        <th><em>Patient name</em></th>
                        <th><em>Address</em></th>
                        <th style="width: 399px;"><em>Order</em></th>
                        <th style="margin-left: 0px;width: 359px;"><em>Confirm Availability</em></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						$user_id = $_SESSION['user_id'];
						$result = mysqli_query($conn, "SELECT order_id, patients.name AS pname, orders.address AS address FROM patients,orders WHERE orders.pat_id=patients.id AND orders.chem_id=$user_id AND status=0");					
						
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>";
							foreach($row as $field=> $value){
								$order_id = $row['order_id'];
								echo "<td>" . $value . "</td>";
							}
							
							$order_name = mysqli_fetch_array(mysqli_query($conn, "SELECT order_name FROM orders WHERE order_id=$order_id"))[0];	
							echo "<td><a href='orders/$order_name'>$order_name</a></td>";
							echo "<td><button class='btn btn-primary' onclick=\"window.location.href='includes/manage_order.php?order_id=$order_id&status=1'\" type='button' style='color: #feffff;margin-left: 6px;background-color: #17252a;'><em>Confirm Order</em></button><button class='btn btn-primary' type='button' onclick=\"window.location.href='includes/manage_order.php?order_id=$order_id&status=-1'\" style='color: #feffff;margin-left: 22px;background-color: #17252a;'><em>Not Available</em></button></td>";
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