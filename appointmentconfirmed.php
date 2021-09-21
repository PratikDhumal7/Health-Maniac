<?php
	include_once 'includes/hmdb.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmed</title>
    <style>
               
 ::-webkit-scrollbar {
  width: 20px;
}

::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
  background: rgb(21, 19, 27); 
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background: #2a2a2e; 
}
         
div.pp {
            font-size: 390%;
            font-family:fantasy;
        }

 input[type=text], select {
  width: 100%;
  padding: 12px 70px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

div {
  border-radius: 5px;
  background-color: #def2f1;
  padding: 20px;
}

.spc { margin-top: 70px;
        color:#17252a;}

        .button {
  background-color:#17252a; 
  border-style: double;
  color: white;
  padding: 22px 52px;
  text-align: center;
  align-content: space-around;
  text-decoration: none;
  font-size: 26px;
        }
        

        </style>
</head>

<body>
    <header>
      <section id="top">
         <div class="pp">
            <center>
               <h3>APPOINTMENT CONFIRMED!</h3>
            </center>
        </div><!---heading-->

	</header>
	
	<body>
        <center>
		<?php
			$app_id = mysqli_fetch_row(mysqli_query($conn, "SELECT MAX(app_id) FROM appointments AS max_id"))[0]; 
			echo "Your appointment ID is <b>$app_id</b>";
		?>
		<section class="spc">
            <br><button class="button "  onclick="window.location.href='home.php';">
               GO BACK TO HOME PAGE
              </button>
            </section></center>
            <section>
                <center> <p>
                    <small> Copyright &copy;2021 All Rights Reserved</small>
                 </p></center>
        </section>
	</body>
</html>