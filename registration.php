<?php

    require "database.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          
        $myusername = $_POST["username"];
        $myfname = $_POST["fname"];
        $mylname = $_POST["lname"];
        $mycontact = $_POST["contact"];
        $mypassword = $_POST["password"];  

        $sql = "SELECT id FROM user WHERE username = '".$myusername."';";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            echo "User Name Already in USE !!!";
        }else {
            $sql = "INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `contact`, `password`) VALUES (NULL, '".$myusername."', '".$myfname."', '".$mylname."', '".$mycontact."', '".$mypassword."');";
            $result = mysqli_query($conn,$sql);
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        }
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
	  		a  {color: #424242;font-size: 12px}
      	</style>

    </head>

    <body>
    	<div class="card-panel z-depth-5 loginpanel">
    		<div class="row center">
    			<h3>Register</h3>
    		</div>
    		<div class="container">
    			<form action="" method="POST" class="center">
	    			<div class="row">
	    				<div class="input-field col s12 ">
	    					<input placeholder="User Name" name="username" type="text" class="validate">
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="input-field col s12 ">
	    					<input placeholder="First Name" name="fname" type="text" class="validate">
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="input-field col s12 ">
	    					<input placeholder="Last Name" name="lname" type="text" class="validate">
	    				</div>
	    			</div>	
	    			<div class="row">
	    				<div class="input-field col s12 ">
	    					<input placeholder="Contact" name="contact" type="number" class="validate">
	    				</div>
	    			</div>					
					<div class="row">
	    				<div class="input-field col s12 ">
	    					<input placeholder="Password" name="password" type="password" class="validate">
	    				</div>
	    			</div>
	    			<input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn grey lighten-5 z-depth-2 ">
    			</form>
    			<br>
    		</div>
    		<a href="index.php">Back.</a>
    	</div>
      	<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>