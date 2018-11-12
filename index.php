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

	  	<div class="carousel carousel-slider center z-depth-3">
    		<div class="carousel-item grey darken-2 white-text" href="#one!">
      			<img src="images/home.jpg" style="height:100%">
      			<h2>Home</h2>
    		</div>
    		<img src="images/home.png">
    		<div class="carousel-item  grey  darken-3 white-text" href="#two!">
    		    <img src="images/1.jpg" style="height:100%">
      			<h2>Register</h2>
    		</div>
    		<div class="carousel-item  grey darken-4 white-text" href="#three!">
    		    <img src="images/home3.png" style="height:100%">
      			<h2>Resources</h2>
    		</div>
    		<div class="carousel-item  grey darken-5 white-text" href="#four!">
    		    <img src="images/home4.png" style="height:100%">
      			<h2>Guide</h2>
    		</div>
  		</div>

	  	<div class="card-panel z-depth-3 center">
	  		<a href="disability.php" class="black-text"><span class="flow-text">DISABILITY TEST</span></a><br><br>
	  		<div class="row scrollmenu">
	  			<?php
	  			    $sql = "SELECT id, name FROM `disability`";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_row($result)) {
    	  			    echo "
            	  			<a href='index.php?disability=".$row[0]."'>
            		  			<div class='row'>
            		  				<div class='card-panel z-depth-3'>
            		  					".$row[1]."
            		  				</div>
            		  			</div>
            	  			</a>
            	  		";
                    }
	  			?>
	  		</div>
	  	</div>

	  	<div class="card-panel z-depth-3 center">
	  		<span class="flow-text">EXPLORE</span><br><br>
	  		<div class="row center">
	  			<div class="col s6 ico_he">
	  				<div class="card-panel">
	  					<a href="certification.php" class="black-text">Certification Procedure</a>
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel">
	  					<a href='schemes.php' class="black-text">Schemes</a>
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel">
	  					<a href='registration.php' class="black-text">Disability Registeration</a>
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel">
	  					RCI Programme
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel">
	  					Educational Video
	  				</div>
	  			</div>
	  			<div class="col s6 ico_he">
	  				<div class="card-panel">
	  					Disability card
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  	
	  	<div class="card-panel z-depth-3 center">
	  	    <span class="flow-text">MEDICAL CARE</span><br><br>
	  	    <div class="row">
	  	        <a href="medicalinfo.php">
	  	        <div class="col s6">
	  	            <div class="row valign-wrapper">
                        <img src="images/in.svg" alt="" class="responsive-img" style="height:100px"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <span class="black-text">
                            Know Your Medical Authority
                        </span>
                    </div>
	  	        </div>
	  	        </a>
	  	        <a href="con.php">
	  	        <div class="col s6">
	  	            <div class="row center valign-wrapper">
                        <img src="images/consultataion.jpg" alt="" class="circle responsive-img" style="height:100px"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <span class="black-text">
                            My Consultation
                        </span>
                    </div>
	  	        </div>
	  	        </a>
	  	    </div>
	  	</div>

	  	<div class="card-panel z-depth-3 center">
	  		<span class="flow-text">ABOUT</span><br><br>
	  		<div class="conatiner">
	  			I-CAN is a tool for objective evaluation of percentage of disability in a child and help in early screening of child. This app empowers parents, anganwadi karyakartas , school teachers and any other person contributing to a child’s upbringing. It allows these users to take the disability test by answering the particular disability related questions(based on the guidelines for the identification and.certification of persons with disability issued by Government of India.) It also provides a gateway to information for persons with disability and all concerned with this sector. It aims to provide critical medical care to the child with special needs and increase coordination between social welfare department and medical boards.

	  		</div>
	  	</div>

	  	<div class="scrollmenu card-panel z-depth-3">
	  		<a href="" class="ico_he">
	  			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/1200px-Emblem_of_India.svg.png" height="75px">
	  		</a>
	  		<a href="" class="ico_he">
	  			<img src="https://upload.wikimedia.org/wikipedia/en/4/46/Make_In_India.png" height="75px">
	  		</a>
	  		<a href="" class="ico_he">
	  			<img src="https://upload.wikimedia.org/wikipedia/hi/d/d7/Swachh_Bharat_Abhiyan_logo.jpg" height="75px">
	  		</a>
	  	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>