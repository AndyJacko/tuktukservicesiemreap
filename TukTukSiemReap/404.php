<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php include("scripts/template/coremeta.php"); ?>    
    <title>404 Page Not Found</title>
    <meta name="description" content="The page you're looking for could not be found">
    <meta name="keywords" content="">
    <?php include("scripts/template/corehead.php"); ?>
  </head>
  
  <body>
	  <?php include("scripts/template/analytics.php"); ?>
	  <?php include("scripts/template/navbar.php"); ?>
    
    <div id="blue">
      <div class="container">
        <div class="row">
          <h3>Page Not Found.</h3>
        </div>
      </div>
    </div>
    
    <div class="container mtb">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-responsive" src="/images/404.jpg" alt="">
        </div>
        
        <div class="col-lg-6">
          <h4>The page you're looking for could not be found.</h4>
          <p>Here are some helpful links to get you back on track:</p>
          <p>
            <a href="https://tuktuk.andyjacko.com">Home</a><br />
            <a href="about.php">About</a><br />
            <a href="basic.php">Basic Website Package</a><br />
            <a href="intermediate.php">Intermediate Website Package</a><br />
            <a href="pro.php">Pro Website Package</a><br />
            <a href="contact.php">Contact</a>
          </p>
        </div>
      </div>
    </div>
    <?php include("scripts/template/footer.php"); ?>
    
    <?php include("scripts/template/corescripts.php"); ?>
  </body>
</html>