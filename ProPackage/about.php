<?php if (!isset($_SESSION)) { session_start(); }?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk Tuk Service Siem Reap - Pro Website Package Example - About Me</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I come from small village near Battambang province. There was not many school in my village and so I move to school in Siem Reap.">
    <meta name="author" content="Andy Jacko">
    <link href="scripts/bootstrap/css/themes/bootstrap-<?php echo $_SESSION["theme"]; ?>.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php include ("scripts/template/nav.php");?>
    <div class="container-fluid text-center">    
      <div class="row content">
        <?php include ("scripts/template/colleft.php");?>
        <div class="col-sm-7 text-left"> 
          <div class="row">
            <div id="pageHeader" class="container-fluid mark">
              <h1>About Me</h1>
            </div>
          </div>
          <div class="row">
            <div class="container-fluid">
              <div class="spacer"></div>
              <div class="well">
                <img src="images/header3.jpg" class="img-responsive img-rounded" alt="Header Image"/>
                <h3>I have been tuk tuk driver for over 10 years.</h3>
                <p>I come from small village near Battambang province. There was not many school in my village and so I move to school in Siem Reap.</p>
                <p>Now I finish school I become tuk tuk driver and guide to show visitor around my great country.</p>
                <p>In 2000 I finished at high school and driving school too. I decided to be a tuk tuk driver in Siem Reap. Now I have much experirence as I have been driving customers for over 10 years. Please try my service - you can <a href="contact.php">contact me</a> for good price.</p>
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
