<?php
    require "database.php";
    session_start ();
    $session_name = "user";
    if (!isset ($_SESSION[$session_name]) || $_SESSION[$session_name] == "") {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    }
    if ($_SESSION[$_SESSION['disability'].'question']=="" || !(isset ($_SESSION[$_SESSION['disability'].'question']))) {
        $_SESSION[$_SESSION['disability'].'question']=1;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
          
        $answer = $_POST["group1"];
        $sql = "INSERT INTO `correctans` (`id`, `userid`, `ansid`, `queid`) VALUES (NULL, '".$_SESSION["userid"]."', '".$answer."', '".$_SESSION[$_SESSION['disability']."question"]."');";

        $result = mysqli_query($conn,$sql);
        if (!$result) {
            echo "Fail!!!";
        }
        $_SESSION[$_SESSION[$_SESSION['disability']."question"]."ans"]=$answer;
        $_SESSION[$_SESSION['disability'].'question']+=1;
    }
    if (isset($_GET['submission'])) {
        if ($_SESSION["count"]>$_SESSION[$_SESSION['disability']."question"]) {
            echo "Complete All Questions";
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
	  		a  {color: #212121;font-size: 12px}
	  		img {height: 100%;}
	  		.he {height: 250px;}
	  		div.scrollmenu {overflow: auto;white-space: nowrap;}
			div.scrollmenu a {display: inline-block;text-align: center;text-decoration: none;padding-left: 15px;color: #263238;}
			.ico_he {height: 100px;}
	  	</style>

    </head>

    <body>

        <?php require "navigation.php"?>

	  	<div class="card-panel center z-depth-3 ">
            <ul class='pagination'>
                <?php
                    require "database.php";
                    $sql = "SELECT question_id, question FROM question WHERE language = ".$_SESSION['lang']. " AND disability_id = ".$_SESSION['disability'].";";
                    $result = mysqli_query($conn,$sql);
                    $count=0;
                    while ($row = mysqli_fetch_row($result)) {
                        $count=$count+1;
                        $activate = "";
                        $disable="";
                        if ($row[0]==$_SESSION[$_SESSION['disability'].'question']) {
                            $activate="active grey";
                        }
                        if ($_SESSION[$_SESSION['disability'].'question']>$count) {
                            $disable=" disabled ";
                        }
                        echo "<li class='waves-effect black-text ".$disable." ".$activate."'><a href=''>".$row[0]."</a></li>";
                    }
                    $_SESSION["count"]=$count;
	  			?>
            </ul>
    	</div>
    	
    	<div class='card-panel z-depth-3'>
    	    <div class='container center flow-text'>
    	        <?php
                    require "database.php";
                    $sql = "SELECT question_id, question FROM question WHERE language = ".$_SESSION['lang']." AND question_id=".$_SESSION[$_SESSION['disability'].'question']." AND disability_id = ".$_SESSION['disability'].";";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<li class='waves-effect black-text'>".$row[1]."</li>";
                    }
	  			?>
	  			<div class='container left-align'>
    	  			<form action="" method="POST">
                        <?php
                            require "database.php";
                            $sql = "SELECT answer_id, name FROM answer WHERE language = ".$_SESSION['lang'].";";
                            $result = mysqli_query($conn,$sql);
                            if ($_SESSION["count"]>=$_SESSION[$_SESSION['disability']."question"]) {
                                while ($row = mysqli_fetch_row($result)) {
                                    echo "<p>
                                            <label>
                                                <input name='group1' type='radio' value=".$row[0]." />
                                                <span>".$row[1]."</span>
                                            </label>
                                        </p>
                                    ";
                                }
                                echo "<div class='center'>
                                            <input class='waves-effect waves-light btn white black-text z-depth-3' type='submit' name='submit' value='✔️' /><br><br>
                                        </div>";
                            }else if ($_SESSION["count"]==0) {
                                echo "<div class='center'>Test Comming Soon !</div>";
                            }else {
                                echo "<div class='center'>Test Completed !!!</div>";
                            }
    	  			    ?>   
                    </form>
                </div>
    	    </div>
    	</div>
    	<?php 
    	    if ($_SESSION["count"]==0) {
    	        echo "<div class='card-panel z-depth-3 center '>
    	            <a class='waves-effect waves-light btn white black-text z-depth-3' href='index.php'>✔ Continue To Home Page...</a>
    	        </div>
    	        ";
    	    } else if ($_SESSION["count"]<$_SESSION[$_SESSION['disability']."question"]) {
    	        echo "<div class='card-panel z-depth-3 center '>
    	            <a class='waves-effect waves-light btn white black-text z-depth-3' href='result.php'>✔ Submit Test</a>
    	        </div>
    	        ";
    	    }
        ?>
      	<script type="text/javascript" src="js/materialize.min.js"></script>
      	<script>M.AutoInit();</script>
    </body>
</html>