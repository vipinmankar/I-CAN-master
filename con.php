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
			.card-stacked{}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>
        
        <div class="card-panel z-depth-3 center">
            <span class="flow-text">My Consultation</span>
        </div>

	  	<div class="col s12 m7">
    <h2 class="header">Dr xyz</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="images/images-5.jpeg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Local Guide · 113 reviews · 158 photos
            9 months ago
            The Dr Reddy's Foundation(PwD) 'GROW' program is to enhance skills of disabled persons and open the work opportunities for them. The staff here is very caring and they always motivates everyone to do good in life and the program.
</p>
        </div>
        <div class="card-action">
         <a class="waves-effect waves-light btn-large">show detail</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m7">
    <h2 class="header">DR xyz</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="images/doc.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Local Guide · 113 reviews · 158 photos
            9 months ago
            The Dr Reddy's Foundation(PwD) 'GROW' program is to enhance skills of disabled persons and open the work opportunities for them. The staff here is very caring and they always motivates everyone to do good in life and the program.
</p>
        </div>
        <div class="card-action">
         <a class="waves-effect waves-light btn-large">show detail</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m7">
    <h2 class="header">Dr xyz</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="images/docfem.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Local Guide · 113 reviews · 158 photos
            9 months ago
            The Dr Reddy's Foundation(PwD) 'GROW' program is to enhance skills of disabled persons and open the work opportunities for them. The staff here is very caring and they always motivates everyone to do good in life and the program.
</p>
        </div>
        <div class="card-action">
         <a class="waves-effect waves-light btn-large">show detail</a>
        </div>
      </div>
    </div>
  </div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>