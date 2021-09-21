<!DOCTYPE html>
<?php
	include_once 'includes/hmdb.php';
	@$error=$_GET['error'];
	@$order=$_GET['order'];
	@$location=$_GET['location'];
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>chembuy</title>
    <link rel="stylesheet" href="assetstemp/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assetstemp/css/Header-Blue.css">
    <link rel="stylesheet" href="assetstemp/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assetstemp/css/styles.css">
</head>

<SCRIPT language=JavaScript>
    function reload(form) {
        var val = form.location.options[form.location.options.selectedIndex].value;
        self.location = 'buymed.php?location=' + val;
    }
</script>

<body>
    <div>
        <div class="header-blue"
            style="background-image: url(&quot;assetstemp/img/chemb.jpg&quot;);background-size: 100%;">
            <div>
                <?php 
					if(isset($error)){
						if($error == 1){
							echo "<center><p style=\"color:white;background-color:red\">Error - Please select chemist</p></center>";
						} else if($error == 2){
							echo "<center><p style=\"color:white;background-color:red\">Error - Login session expired</p></center>";
						} else if($error == 3){
							echo "<center><p style=\"color:white;background-color:red\">Error - File couldn't be uploaded</p></center>";
						} else if($error == 5){
							echo "<center><p style=\"color:white;background-color:red\">Error - Please input valid address</p></center>";
						} else {
							echo "<center><p style=\"color:white;background-color:red\">Error - Unknown error</p></center>";
						}
					} else if(isset($order)){
						echo "<center><p style=\"color:white;background-color:green\">Order successfully placed</p></center>";
					}
				?>
            </div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid">
                    <center><a class="navbar-brand" href="home.php"
                            style="font-family: 'Abril Fatface', cursive;font-size: 56px;color: rgb(0,0,0);">HEALTH
                            MANIAC</a></center><button class="navbar-toggler" data-toggle="collapse"><span
                            class="sr-only">Toggle
                            navigation</span><span class="navbar-toggler-icon"></span></button>
                </div>
            </nav><a class="navbar-brand" href="#"
                style="font-family: 'Abril Fatface', cursive;font-size: 65px;color: rgb(0,0,0);margin-left: 205.5px;"><strong>ORDER
                    YOUR MEDICINES NOW!!</strong></a>
            <div class="container hero">
                <div class="iphone-mockup" style="margin-left: 554px;"><img class="device"
                        src="assetstemp/img/iphone.svg">
                    <div class="screen" style="background-color: #17252a;">
                        <form method="post" action="includes/upload_order.php" enctype="multipart/form-data"
                            style="margin-top: 50px;margin-right: 10px;margin-left: 10px;font-family: 'Abril Fatface', cursive;">
                            <h2 class="sr-only" style="color: #feffff;">BUY MEDICINE</h2>
                            <!-- <div class="illustration"></div> -->
                            <div class="form-group">
                                <label for="hosp" style="font-size: 8px;">CHEMIST LOCATION:</label>
                                <select name="location" onchange="reload(this.form)" class="form-control" id="location"
                                    style="height: 45px;">
                                    <option value="">Select Location</option>
                                    <?php 
										$sql = mysqli_query($conn, "SELECT DISTINCT location FROM chemists WHERE 1");
										while ($row = $sql->fetch_assoc()){
											foreach($row as $field=>$value){
												if($value==@$location) {
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
                                <!-- <label for="chemist" style="font-size: 14px;">SUPPLIER:</label> -->
                                <select id="chemist" name="chem_id" style="width: 240px;height: 45px;">
                                    <option value="">Select Supplier</option>
                                    <?php
										if(isset($location) and strlen($location) > 0){
											$quer = "SELECT id,name FROM chemists WHERE location='$location' ORDER BY name"; 
										} else {
											$quer = "SELECT id,name FROM chemists ORDER BY name"; 
										} 
										$sql = mysqli_query($conn, $quer);
										while ($row = $sql->fetch_array()){
											echo "<option value=\"$row[0]\">" . $row[1] . "</option>";
										}
									?>
                                </select>
                            </div>
                            <div>
                                <label for="chemist" style="font-size: 14px;color:#feffff;">PRESCRIPTION:</label>
                                <input type="hidden" name="MAX_FILE_SIZE" value="900000" /><input name="order"
                                    type="file" style="height:35px;" />
                            </div>
                            <div class="form-group"><input class="form-control" name="address" type="text"
                                    style="height: 60px;margin-top: 10px" placeholder="ADDRESS HERE"></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                                    style="font-size: 29px;background-color: #3aafa9; margin-top: 10px;">ORDER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assetstemp/js/jquery.min.js"></script>
    <script src="assetstemp/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>