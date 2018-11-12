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
	  	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('select');
			var instances = M.FormSelect.init(elems, {});
		});
	</script>
    </head>

    <body>

        <?php require "navigation.php"?>

        <div class="card-panel z-depth-3 center">
            <span class="flow-text">Know Your Medical Authority</span>
        </div>

	  	<div class="card white darken-1" style="border-radius: 10px;">
		<div class="card-content white-text">
			<span class="card-title" id="bgcolor">Disabilty</span>
			<select>
				<option value="" disabled selected>State/UT</option>
				<option value="1">Maharashtra</option>
				<option value="2">Madhya Pradesh</option>
				<option value="3">Chattisgarh</option>
				<option value="4">Goa</option>
				<option value="5">Tamil Nadu</option>
				<option value="6">Arunachal Pradesh</option>
				<option value="7">Assam</option>
				<option value="8">Sikkim</option>
				<option value="9">Jammu and Kashmir</option>
				<option value="10">Gujrat</option>
				<option value="11">Uttar Pradesh</option>
				<option value="12">Bihar</option>
				<option value="13">Haryana</option>
				<option value="14">Delhi</option>
				<option value="15">Karnataka</option>
				<option value="16">Andhra Pradesh</option>
				<option value="17">Kerela</option>
				<option value="18">Orissa</option>
				<option value="19">Meghalaya</option>
				<option value="20">Rajasthan</option>
				<option value="21">Daman and Diu</option>
				<option value="22">Lakshadweep</option>
			</select>
			<select>
				<option value="" disabled selected>District</option>
				<option value="1">Raipur</option>
			</select>
			<div class="scrollmenu">
			<table class="striped highlight black-text">
			    <thead>
    				<tr>
    					<th>CMO Office</th>
    					<th>Address</th> 
    					<th>Contact<br>Person</th>
    					<th>Email ID</th>
    					<th>Contact No.</th>
    				</tr>
				</thread>
				<tbody>
    				<tr>
    					<td>Chief Medical Officer Pithoragarh</td>
    					<td>Chief Medical Office</td>
    					<td>Dr. Usha Gunjiyal</td>
    					<td>cmopithoragarh@gmail.com</td>
    					<td>225142</td>
    				</tr>
    				<tr>
    					<td>Chief Medical Officer Uttar Kashi</td>
    					<td>Office of the Chief Medical Officer</td>
    					<td>Dr. Vinodkumar Nautiyal</td>
    					<td>cmoukashi@gmail.com</td>
    					<td>222106</td>
    				</tr>
    				<tr>
    					<td>Chief Medical Officer Nainital</td>
    					<td>G.B.Pant Hospital, Tallital</td>
    					<td>Dr. Bharti Rana</td>
    					<td>nainitalcom1@gmail.com</td>
    					<td>235285</td>
    				</tr>
    				<tr>
    					<td>Chief Medical Ofiicer Dehradun</td>
    					<td>Chief Medical Office, 105 Chandar Nagar</td>
    					<td>Dr. S.K.Gupta</td>
    					<td>cmodehradoon@gmail.com</td>
    					<td>2724506</td>
    				</tr>
    				<tr>
    					<td>Chief Mediacl Officer Dadra and Nagar Haveli</td>
    					<td>Directorate of Medical and HEalth Services, Sri Vinoba Bhave Civil Hospital, Sayli Road</td>
    					<td>Dr. V.K.Das</td>
    					<td>vkdasil@gmail.com</td>
    					<td>2640615</td>
    				</tr>
    				<tr>
    					<td>Test Gandhinagar</td>
    					<td>Gandhinagar</td>
    					<td>Test</td>
    					<td>testgandhinagar@gmail.com</td>
    					<td>2635484</td>
    				</tr>
    				<tr>
    					<td>Chief Medical Officer North District</td>
    					<td>District Hospital, Mangan</td>
    					<td>Dr. Maroon Subha</td>
    					<td>districthospitalmangan@yahoo.com</td>
    					<td>4425896</td>
    				</tr>
				</tbody>
			</table>
		</div>
		</div>
	</div>

      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>