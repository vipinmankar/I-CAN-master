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
    if (isset($_GET['search'])=="scheme") {
        $_SESSION['search']="scheme";
        echo "<script type='text/javascript'> document.location = 'schemes.php'; </script>";
    }
    if (isset($_GET['search'])=="udid") {
        $_SESSION['search']="udid";
        echo "<script type='text/javascript'> document.location = 'schemes.php'; </script>";
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
			.btn {border-radius:50px;color:black;}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

	  	<div class="card-panel z-depth-3 flow-text center">
    		Schemes
    	</div>

        <div class="card-panel z-depth-3 center">
            <a class="waves-effect waves-light btn white black-text" href='schemes.php?search="scheme"'>Search by Schemes</a>
    		    OR
    		<a class="waves-effect waves-light btn white black-text" href='schemes.php?search="udid"'>Search by UDID</a><br>
        </div>
        
        <?php
            if ($_SESSION["search"]=='scheme') {
                echo "
                    <div class='card-panel center'>
                        <span class='flow-text center'>Search by Schemes</span>
                    </div>
                    <div class='card-panel z-depth-3'>
                        <div class='container'>
                            <span class='flow-text' id='bgcolor'>Disabilty</span><br>
                			<select>
                			    <option value='' disabled selected>Choose Disability</option>
                ";
                	  			    $sql = "SELECT `name`, `description`, `id` FROM `disability`";
                                    $result = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_row($result)) {
                    	  			    echo "<option value='".$row[2]."'>".$row[0]."</option>";
                                    }
                echo "
                    		</select><br>
                    		<div class='divider'></div><br>
                    		<span class='flow-text' id='bgcolor'>Gender</span><br>
                        	<form action='#'>
                                <p>
                                  <label>
                                    <input name='group1' type='radio' checked />
                                    <span>Male</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input name='group1' type='radio' />
                                    <span>Female</span>
                                  </label>
                                </p>
                            </form><br>
                            <div class='divider'></div><br>
                            Date of Birth<br>
                            <input type='text' class='datepicker'><br>
                            <div class='divider'></div><br>
                            Date of Birth<br>
                            <div class='input-field col s6'>
                                <input placeholder='Location' id='first_name' type='text' class='validate'>
                            </div>
                        </div>
                        <a class='btn red white-text'>Search</a>
                    </div>
                ";
            }
            if ($_SESSION["search"]=='udid') {
                echo "
                    <div class='card-panel center'>
                        <span class='flow-text center'>Search by UDID</span>
                    </div>
                    <div class='card-panel z-depth-3 center'>
                        <div class='input-field col s6'>
                            <input placeholder='Enter UIDI' id='first_name' type='text' class='validate'>
                        </div>
                        <a class='waves-effect waves-light btn red white-text' href='scheme.php'>Search</a>
                    </div>
                ";
            }
        ?>
        
      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>