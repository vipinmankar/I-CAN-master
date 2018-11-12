<?php
    session_start ();
    $session_name = "user";
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
	  		a  {color: #b0bec5;font-size: 12px}
	  		img {height: 100%;}
	  		.he {height: 250px;}
	  		div.scrollmenu {overflow: auto;white-space: nowrap;}
			div.scrollmenu a {display: inline-block;text-align: center;text-decoration: none;padding-left: 15px;color: #263238;}
			.ico_he {height: 100px;}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

	  	<div class="card-panel z-depth-3 flow-text center">
    		NGO
    	</div>

    	<div class="container center">
    		<ul class="collapsible popout">
	  			<li>
                    <div class='collapsible-header'>Sewa Niketan Handicapped Rehabilitation Center, Chherkheri, Raipur</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
346 / 2.2.1984
-
Grant received
-
School of bone disrupted children

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Raipur Branch National Association for the Blind, Hirapur, Raipur</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
1554 / 2.8.1995
-
Grant received
-
School and hostel of visually impaired girls

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Handicapped Child Development Home Samata Colony, Raipur</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
2493 / 11.10.1984
-
Grant received
-
Hostel hostage girl

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Shravan silent guardian association Pradnya Mute Deaf Shala Madhava Sapre Shala Complex, Old Dadar, Raipu</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
346 / 2.2.1984
-
-
-
Daily school of hearing impaired children

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Akankhya Lions School For Mantleley Handycaped Jalvihar Colony Raipur</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
488/15/02/1996
-
Grant received
-
Educating Children - Training

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Dialogue Speech Therapy Center, Jalavihar Colony Raipur</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
346 / 2.2.1984
-
-
-
Disabled welfare

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Kemp, Raipur, Chhattisgarh Child and Old Welfare Counci</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
-
Grant received
-
-
Operation of elderly

                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Handicraft Development Block-Abhanpur District-Raipur</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>
                            
632 / 31.5.1982
-
Grant received
-
Orthopedic school and hostel

                        </span>
                    </div>
                </li>
			</ul>
    	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>