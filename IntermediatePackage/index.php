<?php
if (!isset($_SESSION) ) {
  session_start();
}
if (isset($_GET["theme"]) || isset($_SESSION["theme"])) {
  if (isset($_GET["theme"])){
	$_SESSION["theme"] = $_GET["theme"];
  }
} else {
  $_SESSION["theme"] = "default";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk Tuk Service Siem Reap - Intermediate Website Package Example - Home Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hello I am Keo Khemrin. I am a tuk tuk driver in Siem Reap, Angkor Wat, Cambodia. I have over 10 years experience in driving tuk tuk.">
    <meta name="author" content="Andy Jacko">
    <link href="scripts/bootstrap/css/themes/bootstrap-<?php echo $_SESSION["theme"]; ?>.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php include ("scripts/template/nav.php");?>
    <div class="container-fluid text-center">    
      <div class="row content">
        <div class="col-sm-9 text-left"> 
          <div class="row">
            <div id="pageHeader" class="container-fluid mark">
              <h1>Tuk Tuk Driver Siem Reap</h1>
            </div>
          </div>
          <div class="row">
            <div class="container-fluid">
              <div class="spacer"></div>
              <div class="well">
                <img src="images/header.jpg" class="img-responsive img-rounded" alt="Header Image"/>
                <h3>Hello my name is Keo Khemrin</h3>
                <p>I am a tuk tuk driver in Siem Reap, Angkor Wat, Cambodia. I have over 10 years experience in driving tuk tuk. I offer you a range of tuk tuk services, including: Single Journey, 1 Hour Service, Half Day Tours and Full Day Tours. All services are based within Siem Reap and Angkor Wat area.</p>
                <p>If you wish to travel outside the local area this can also be arranged for you. I am always available to attend to your sightseeing and activites, either dropping off and picking up or waiting for you in tuk tuk is also no problem.</p>
              </div>
            </div>
          </div>
        </div>
        <?php include ("scripts/template/colright3.php");?>
      </div>
    </div>
    <?php include ("scripts/template/footer.php");?>
    <script src="scripts/bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="scripts/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
