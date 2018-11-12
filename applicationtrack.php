<?php
    session_start ();
    $session_name = "user";
    if (!isset ($_SESSION["visit"]) || $_SESSION["visit"] == "") {
        $_SESSION ["main_color"]="blue";
    }
    if (!isset ($_SESSION[$session_name]) || $_SESSION[$session_name] == "") {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    }
    if (isset($_GET['disability'])) {
        $_SESSION['disability']=$_GET['disability'];
        echo "<script type='text/javascript'> document.location = 'language.php'; </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      	<style type="text/css">
      		body {font-family: 'Raleway', sans-serif;color: #263238;}
      		.round {border-radius: 50px;}
	  		.loginpanel {width: 320px;top: 50%;left: 50%;position: absolute;transform: translate(-50%,-50%);}
	  		img {height: 100%;}
	  		.he {height: 250px;}
	  		div.scrollmenu {overflow: auto;white-space: nowrap;}
			div.scrollmenu a {display: inline-block;text-align: center;text-decoration: none;padding-left: 15px;color: #263238;}
			.ico_he {height: 100px;}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

        <div class="card-panel z-depth-3 center">
            <span class="flow-text">Tracking Appication</span>
        </div>
        
        <div class="card-panel z-depth-3 center white-text">
		    <form action="" method="POST">
		        <div class="row">
    		        <div class="input-field col s6">
                        <input placeholder="Enter UDID" id="first_name" type="text" class="validate">
                    </div>
                    <div class="col s6">
                        <a class="waves-effect waves-light btn blue white-text" href="" style="border-radius:50px;">Find by UDID</a>
                    </div>
                </div>
		    </form>
		</div>

	  	<div class="row">
    <div class="col s12 m6">
      <div class="card white darken-3">
        <div class="card-content black-text">
          <span class="card-title"></span>
           <div class="center">
          <img src="images/tracking.PNG" style="width: 300px;">
                </div>
              <br>
              <p>
                ID no -#12887abs
                <br><B><i>step proceeded and completed</i> </B><br>
                1. Request send<br>
                2.certification process<br>
                <B><i>social welfare followup</i></B><br>
              </p>
        </div>
       
        </div>
      </div>
    </div>
  </div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>