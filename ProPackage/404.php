<?php if (!isset($_SESSION)) { session_start(); }?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk Tuk Service Siem Reap - Pro Website Package Example - 404 Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
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
              <h1>404 Page Not Found</h1>
            </div>
          </div>
          <div class="row">
            <div class="container-fluid">
              <div class="spacer"></div>
              <div class="well">
                <p>The page you are looking for is not here, please use the menu to navigate the website.</p>
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
