<!DOCTYPE html>
<?php
	include_once 'includes/hmdb.php';
	@$error=$_GET['error'];
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
function reload(form)
{
var val=form.location.options[form.location.options.selectedIndex].value;
self.location='buymed.php?location=' + val ;
}
</script>

<body>
	<!-- <?php 
		if(isset($error)){
			echo "<center><p>Error - Unknown error</p></center>";
		}
	?> -->
    <div>
        <div class="header-blue"
            style="background-image: url(&quot;assetstemp/img/chemb.jpg&quot;);background-size: 100%;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="home.php"
                        style="font-family: 'Abril Fatface', cursive;font-size: 56px;color: rgb(0,0,0);">HEALTH
                        MANIAC</a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle
                            navigation</span><span class="navbar-toggler-icon"></span></button></div>
            </nav><a class="navbar-brand" href="#"
                style="font-family: 'Abril Fatface', cursive;font-size: 65px;color: rgb(0,0,0);margin-left: 205.5px;"><strong>ORDER
                    YOUR MEDICINES NOW!!</strong></a>
            <div class="container hero">
                <div class="iphone-mockup" style="margin-left: 554px;"><img class="device"
                        src="assetstemp/img/iphone.svg">
                    <div class="screen" style="background-image: url(&quot;assetstemp/img/iphonehm.jpg&quot;);">
                        <form method="post" action="place_order.php"
                            style="margin-top: 128px;margin-right: 10px;margin-left: 10px;font-family: 'Abril Fatface', cursive;">
                            <h2 class="sr-only">BUY MEDICINE</h2>
                            <div class="illustration"></div>
                            <div class="form-group"><input class="form-control" type="text" style="height: 94px;"
                                    placeholder="ADDRESS HERE"></div>
                            <div class="form-group">
                                <label for="hosp" style="font-size: 14px;">CHEMIST LOCATION:</label>
                                <select name="location" onchange="reload(this.form)" class="form-control" id="location">
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
                                <label for="chemist" style="font-size: 14px;">SUPPLIER:</label>
                                <select id="chemist" name="chem_name" style="width: 80px;">
                                    <option value="">Select Supplier</option>
									<?php
										if(isset($location) and strlen($location) > 0){
											$quer = "SELECT name FROM chemists WHERE location='$location' ORDER BY name"; 
										} else {
											$quer = "SELECT name FROM chemists ORDER BY name"; 
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
                            <div class="form-group"><input type="file" id="file" style="display:none;" /><button
                                    id="button" name="button" value="Upload" onclick="thisFileUpload();"
                                    class="btn btn-primary" type="button"
                                    style="color: #feffff;background-color: #17252a; margin-left: 20px; margin-top: 5px;">UPLOAD
                                    PRESCRIPTION</button>
                                <script>
                                    function thisFileUpload() {
                                        document.getElementById("file").click();
                                    };
                                </script>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                                    style="font-size: 29px;background-color: #3aafa9; margin-top: 20px;">ORDER</button>
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