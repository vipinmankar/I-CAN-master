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
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

        <div class="card-panel z-depth-3 center">
            <span class="flow-text">About Department</span>
        </div>

        <div class="card-panel z-depth-3">
            The Constitution of India provides certain special Constitutional safeguards for the welfare of Scheduled Castes and Scheduled Tribes and other weaker sections of the population, so that they could take their rightful place in community. As citizens of the Republic of India, they are fully entitled to certain rights and privileges, which were denied to them in the past on the ground of Caste system and the practice of Untouchability. Keeping in view, the Constitutional mandate.<br>
				<b>24x7 Helpline : 9980265475/76/64</b>
        </div>
        
        <div class="card-panel z-depth-3 center">
            <span class="flow-text">Request for Follow Ups</span>
            <form action="#">
				<div class="file-field input-field center" style="background-color: white">
					<div class="btn" style="border-radius: 50px;background-color: #1565c0">
						<span>Choose File</span>
						<input type="file">
					</div>
					<div class="file-path-wrapper" style="width:135px">
						<input class="file-path validate" type="text">
					</div>
				</div>
			</form>
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" class="materialize-textarea"></textarea>
							<label for="textarea1"><b>Grievances(if any)</b></label>
						</div>
					</div>
				</form>
			</div>
        </div>
        <div class="center">
            <a class="waves-effect waves-light btn blue darken-3" style="border-radius: 50px">Submit</a>
        </div>
      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>