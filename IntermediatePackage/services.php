<?php if (!isset($_SESSION)) { session_start(); }?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk Tuk Service Siem Reap - Intermediate Website Package Example - Services Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I will drive tuk tuk for you around Siem reap and also to further city in Cambodia">
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
              <h1>My Services</h1>
            </div>
          </div>
          <div class="row">
            <div class="container-fluid">
              <div class="spacer"></div>
              <div class="well">
                <img src="images/header2.jpg" class="img-responsive img-rounded" alt="Header Image"/>
                <h3>I will drive tuk tuk for you around Siem Reap and also to further city in Cambodia.</h3>
                <p>Some of the places I drive to include:</p>
                <ul>
                  <li>Angkor Temples</li>
                  <li>Siem Reap to Phnom Penh</li>
                  <li>Siem Reap to Battambang</li>
                  <li>Siem Reap to Shianoukville</li>
                  <li>Siem Reap to Kep &amp; Kapot</li>
                  <li>Siem Reap to Ratanak Kiri</li>
                </ul>
                <p>I can also take you to other place, you please just ask.</p>
                <div class="spacer"></div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="panel panel-default text-center">
                      <div class="panel-heading"> 
                        <h3 class="panel-title"><strong>Single Journey</strong></h3>
                      </div>
                      <div class="panel-body">
                        <span class="price"><strong>$3-$5</strong></span>
                      </div>
                      <ul class="list-group">
                        <p class="list-group-item"><strong>Local</strong> Area</p>
                        <p class="list-group-item"><strong>Airport</strong> Drop Off</p>
                        <p class="list-group-item"><strong>Single</strong> Journey</p>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="panel panel-default text-center">
                      <div class="panel-heading"> 
                        <h3 class="panel-title"><strong>1 Hour Service</strong></h3>
                      </div>
                      <div class="panel-body">
                        <span class="price"><strong>$5</strong></span>
                      </div>
                      <ul class="list-group">
                      <p class="list-group-item"><strong>FREE</strong> Small Water</p>
                      <p class="list-group-item"><strong>FREE</strong> Cold Towel</p>
                      <p class="list-group-item"><strong>1</strong> Hour</p>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="panel panel-primary text-center">
                      <div class="panel-heading"> 
                        <h3 class="panel-title"><strong>Half Day Tours</strong></h3>
                      </div>
                      <div class="panel-body">
                        <span class="price"><strong>$8</strong></span>
                      </div>
                      <ul class="list-group">
                      <p class="list-group-item"><strong>FREE</strong> Small Water</p>
                      <p class="list-group-item"><strong>FREE</strong> Cold Towel</p>
                      <p class="list-group-item"><strong>3-6</strong> Hours</p>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="panel panel-default text-center">
                      <div class="panel-heading"> 
                        <h3 class="panel-title"><strong>Full Day Tours</strong></h3>
                      </div>
                      <div class="panel-body">
                        <span class="price"><strong>$12</strong></span>
                      </div>
                      <ul class="list-group">
                      <p class="list-group-item"><strong>FREE</strong> Small Water</p>
                      <p class="list-group-item"><strong>FREE</strong> Cold Towel</p>
                      <p class="list-group-item"><strong>8-9</strong> Hours</p>
                      </ul>
                    </div>
                  </div>
                </div>
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
