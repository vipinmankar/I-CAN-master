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

	  	<div class="card-panel center z-depth-3">
	  	    <span><h4>Certification</h4></span>
	  	</div>
	  	<div class="card-panel z-depth-3">
	  	    <div class="container">
	  	    <h5>Procedure for obtaining Certificate</h5><br>

                Parent of a person with disability, or a person himself, should approach to the District hospital with his request for obtaining Disability Certificate providing the following documents:-<br><br>
                <div class="container">
                    1. Copy of I.D. of the person with disability and 2 photographs showing the disability part.<br>
                    2. Copy of all medical and psychological reports available.<br><br>
                </div>
                Medical Board distributes the cases to the medical subcommittees specialized for different types of disabilities, according to the medical diagnosis of the person with disability.
                Medical Board issues the Disability Certificate to the person with disability that he should receive from the District Hospital, after its verification by the Head of the Medical Board.
                The State Governments / UT Administrations may constitute the medical boards
                The Director General of Health Services Ministry of Health and Family Welfare will be the final authority, should there arise any Controversy/doubt regarding the interpretation of the definitions/classifications/evaluations tests etc.
            </div>
	  	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>