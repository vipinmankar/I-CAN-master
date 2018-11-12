<?php
    session_start ();
    $session_name = "user";
    if (!isset ($_SESSION["visit"]) || $_SESSION["visit"] == "") {
        $_SESSION ["main_color"]="blue";
    }
    if (!isset ($_SESSION[$session_name]) || $_SESSION[$session_name] == "") {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
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
			.spanel {height: 100px;}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

	  	<div class="card-panel z-depth-3 center">
	  	    <span class="flow-text">Connect</span>
	  	</div>
	  	
	  	<div class="card-panel z-depth-3">
	  		<div class="row center">
	  			<div class="col s6 spanel">
	  				<div class="card-panel">
	  					<a href="medical_auth.php" class="black-text">Your Medical Authority</a>
	  				</div>
	  			</div>
	  			<div class="col s6 spanel">
	  				<div class="card-panel">
	  					<a href='ngo.php' class="black-text">NGO's</a>
	  				</div>
	  			</div>
	  			<div class="col s6 spanel">
	  				<div class="card-panel">
	  					<a href='swd.php' class="black-text">Social Welfare Department</a>
	  				</div>
	  			</div>
	  			<div class="col s6 spanel">
	  				<div class="card-panel">
	  					District Welfare Board
	  				</div>
	  			</div>
	  		</div>
	  	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>