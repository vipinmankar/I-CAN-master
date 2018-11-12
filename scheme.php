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
    		Schemes for You
    	</div>

    	<div class="container center">
    		<ul class="collapsible popout">
			    <li>
                    <div class='collapsible-header'>Spandan(Special Performance Awards)</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>Spandan is the new name given to the National Trust Awards for special performance in different sectors by people with disabilities. The Awards have been given a new name ‘SPANDAN’, which means pulsating, dynamic or vibrant. The Awards provide a new vibrancy to the registered NGOs and other stakeholders of the National Trust. The Special Performance Awards for contributing to the National Trust Centric Disabilities (SPANDAN), from here on, has a fewer number of Awards but bigger prize money. The awardees are selected through a jury of eminent people from scores of nominations from across the country. This year on, National Trust would recognise men and women achievers exclusively in the sector.<br><br>
                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Samarth Scheme (for residential services)</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>This scheme aims at setting up Samarth Centres for providing respite and residential care of the specified categories of Persons with Disability (PwD). Samarth Centre should provide at a minimum facilities:<br><br>
                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Group Home And Rehabilitation Activities Under National Trust Act for Disabled Adults (to address parents’ concerns about what after them)</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>This scheme aims at setting up Care Associate Cells (CACs) to provide training and create a skilled workforce of care associates to provide adequate and nurturing care for Person with Disabilities (PwD) and their families who require it.It also seeks to provide parents an opportunity to get trained in caregiving if they so desire. This scheme will provide a choice of training through two levels of courses to allow it to create care associates suited to work both with families of persons with Disabilities (PwDs) and other institutions catering to the needs of the PwDs (NGOs, work centres etc.). The details of the schemes<br><br>
                        </span>
                    </div>
                </li>
                <li>
                    <div class='collapsible-header'>Niramaya(Health Insurance Scheme)</div>
                    <div class='collapsible-body'>
                        <span class='left-align'>The scheme envisages delivering comprehensive cover which will
Have a single premium across age band
Provide same coverage irrespective of the type of disability covered under the National Trust Act
Insurance cover upto Rs.1.0 lakh , on reimbursement basis only.
All persons with disabilities under the National Trust Act with valid disability certificate will be
eligible and included.
No pre-insurance medical tests
Treatment can be taken from any hospital.
Niramaya’s Health Insurance Scheme Revised Benefit Chart (on Reimbursement Basis only w.e.f.April, 2015)<br><br>
                        </span>
                    </div>
                </li>
			</ul>
    	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>