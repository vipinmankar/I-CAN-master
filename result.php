<?php
    require "database.php";
    session_start ();
    $session_name = "user";
    if (!isset ($_SESSION[$session_name]) || $_SESSION[$session_name] == "") {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    }
    $suspected=0;
    for ($i=1;$i<=$_SESSION["count"];$i++) {
        if ($_SESSION[$i."ans"]==3) {
            $suspected+=1;
        }
    }
    $_SESSION["sque"]=$suspected;
    $_SESSION["suspected"]=($suspected*100)/$_SESSION["count"];
    $_SESSION["nsuspected"]=100-$_SESSION["suspected"];
    
    $sql = "SELECT id, userid, queid, ansid FROM correctans WHERE userid = ".$_SESSION["user"]." ";
    $result = mysqli_query($conn,$sql);
    while ($row)
    if ($result[2]<$_SESSION["count"]) {
        $_SESSION[$_SESSION['disability'].'question']=$result[2];
    } else {
        echo "<script type='text/javascript'> document.location = 'result.php'; </script>";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql = "INSERT INTO `attempt` (`id`, `user_id`, `disability_id`, `result`) VALUES (NULL, '".$_SESSION[$session_name]."', '".$_SESSION["disability"]."', '".$_SESSION["suspected"]."');";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
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
	  		a  {color: #212121;font-size: 12px}
	  		img {height: 100%;}
	  		.he {height: 250px;}
	  		div.scrollmenu {overflow: auto;white-space: nowrap;}
			div.scrollmenu a {display: inline-block;text-align: center;text-decoration: none;padding-left: 15px;color: #263238;}
			.ico_he {height: 100px;}
	  	</style>
	  	
	  	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      	
      	<script>
			window.onload = function() {

				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					title: {
						text:""
					},
					data: [{
						type: "pie",
						startAngle: 240,
						yValueFormatString: "##0.00\"%\"",
						indexLabel: "{label} {y}",
						dataPoints: [

						{y: <?php echo $_SESSION["nsuspected"];?>, label: "Positive"},
						{y: <?php echo $_SESSION["suspected"];?>, label: "Negative"}						

						]
					}]
				});
				chart.render();
			}
		</script>

    </head>

    <body>
        <?php require "navigation.php"?>
	  	<div class="card-panel z-depth-3">
			<div id="chartContainer" style="height: 150px; width: 100%;"></div>	
		</div>
		<div class="card-panel z-depth-3 ">
		    <span class="flow-text">
		        <?php echo $_SESSION["name"];?><br><br>
		    </span>
		    <div class="container">
		        Total Question : <?php echo $_SESSION["count"];?><br>
		        Suspected Answers : <?php echo $_SESSION["sque"];?><br>
		        <div class="divider black"></div>
		        Suspected Pecentage = <?php echo $_SESSION["suspected"];?>%
		    </div>
		</div>
		<div class="card-panel z-depth-3 center white-text">
		    <form action="" method="POST">
		        <a class="waves-effect waves-light btn red white-text" href="schemes.php" style="border-radius:50px;">Finish Test</a>
		    </form>
		</div>
      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>