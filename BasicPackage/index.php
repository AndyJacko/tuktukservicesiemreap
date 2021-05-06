<?php
if (isset($_GET["theme"])) {
  $theme = $_GET["theme"];
} else {
  $theme = "default";	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Andy Jacko - http://andyjacko.com">
  <title>Tuk Tuk Service Siem Reap - Basic Website Package Example</title>
  <link href="scripts/bootstrap/css/themes/bootstrap-<?php echo $theme; ?>.css" rel="stylesheet">
  <link href="/scripts/bootstrap/css/font-awesome.min.css" rel="stylesheet">
  <link href="/scripts/bootstrap/css/prettyPhoto.css" rel="stylesheet">
  <link href="scripts/bootstrap/css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">Keo Khemrin</a>
      </div>
      
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#about">About</a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Services</a>
          </li>
          <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#social">Social</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <header id="photo" class="photo-section"></header>
  
  <section id="about" class="about-section well">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php if ($_GET["s"] == "1") { echo "<h3 class='text-success'>Your Email Has Been Sent</h3>"; } ?>
          <div class="page-header">
            <h1>Hello my name is Keo Khemrin</h1>
          </div>
          <p>I am a tuk tuk driver in Siem Reap, Angkor Wat, Cambodia. I have over 10 years experience in driving tuk tuk. I offer you a range of tuk tuk services, including: Single Journey, 1 Hour Service, Half Day Tours and Full Day Tours. All services are based within Siem Reap and Angkor Wat area.</p>
          <p>If you wish to travel outside the local area this can also be arranged for you. I am always available to attend to your sightseeing and activites, either dropping off and picking up or waiting for you in tuk tuk is also no problem.</p>
        </div>
      </div>
    </div>
  </section>
  
  <section id="services" class="services-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h1>Services And Tours</h1>
          </div>
          <p>Below is an overview of my main services and tours. If you want to book something outside of these services then <a class="page-scroll" href="#contact">Contact Me</a> and we can work something out.</p>
        </div>
      </div>
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
              <h3 class="panel-title"><strong>Half Day Tours</strong> <span class="badge">Most Popular</span></h3>
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
  </section>
  
  <section id="gallery" class="gallery-section well">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h1>Photo Gallery</h1>
          </div>
          <div id="thumbnails" class="gallery">
          <?php
            $directory = "images/gallery/main";
            $scanned_directory = array_diff(scandir($directory), array('..', '.'));
            $galImgs = count($scanned_directory);
            $galSize = 30;
            $galCount = 2;
            $galPages = ceil(count($scanned_directory)/$galSize);
            
            //echo 'total img = '.$galImgs.' / pages = '. $galPages.'<br>';
            
            echo '<ul class="nav nav-tabs">'.PHP_EOL;
            for ($c=1; $c<=$galPages; $c++) {
                if ($c==1) {
                  echo '<li class="active"><a data-toggle="tab" href="#page'.$c.'">Page '.$c.'</a></li>'.PHP_EOL;
                } else {
                  echo '<li ><a data-toggle="tab" href="#page'.$c.'">Page '.$c.'</a></li>'.PHP_EOL;
                }
            }
            echo '</ul>'.PHP_EOL;
            echo '<div class="tab-content">'.PHP_EOL;
            for ($c=1; $c<=$galPages; $c++) {
                if ($c==1) {
                  echo '<div id="page'.$c.'" class="tab-pane fade in active">'.PHP_EOL;
                } else {
                  echo '<div id="page'.$c.'" class="tab-pane fade">'.PHP_EOL;
                }
                
                for ($i=1; $i<=$galSize; $i++) {
                  if($galCount <= $galImgs+1) {
                    echo '<a href="images/gallery/main/'.$scanned_directory[$galCount].'" rel="prettyPhoto[gallery1]"><img class="thumbnail" src="images/gallery/thumb/'.$scanned_directory[$galCount].'"></a>'.PHP_EOL;
                    $galCount++;
                  }
                }
                
                echo '</div>'.PHP_EOL;
            }
            echo '</div>'.PHP_EOL;
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="social" class="social-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h1>Connect With Me</h1>
          </div>
          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
          <a href="#"><i class="fa fa-tripadvisor fa-2x"></i></a>
        </div>
      </div>
    </div>
  </section>
  
  <section id="contact" class="contact-section well">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
         <div class="page-header">
            <h1>Contact</h1>
          </div>
           <p>
            <i class="fa fa-envelope"></i> E: Keo.Khemrin@tuktukservicesiemreap.com<br/>
            <i class="fa fa-phone-square"></i> M: +885 xxx xxx xxx
          </p>
          <p>Please compete the form below to send an email:</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <form id="form" name="form" method="post">
            <div class="form-group">
              <label for="ContactSubject"><strong>Subject Of Email:</strong></label>
              <select class="form-control" name="ContactSubject" id="ContactSubject">
                <option value="Tuk Tuk Booking" selected="selected">Tuk Tuk Booking</option>
                <option value="General Enquiry">General Enquiry</option>
                <option value="Complaint">Complaint</option>
              
              </select>
            </div>
            <div class="form-group">
              <label for="YourName"><strong>Your Full Name:</strong></label>
              <input type="text" class="form-control" name="YourName" id="YourName">
            </div>
            <div class="form-group">
              <label for="YourEmail"><strong>Your Contact Email address:</strong></label>
              <input type="email" class="form-control" name="YourEmail" id="YourEmail">
            </div>
            <div class="form-group">
              <label for="YourComment"><strong>Your Message:</strong></label>
              <textarea rows="5" class="form-control" name="YourComment" id="YourComment"></textarea>
            </div>
            <button type="submit" class="btn btn-default" disabled>Submit</button>
            <p>&nbsp;</p>
            <p class="small">* All genuine emails replied to within 24 hours.</p>
          </form>
        </div>
      </div>
    </div>
  </section>
      
  <footer id="footer" class="footer-section">
    <div class="container">
      <div class="col-lg-12">
        <p><a href="https://tuktuk.andyjacko.com/" target="_blank">TukTukServiceSiemReap</a> &copy; <?php echo date("Y"); ?>. All Rights Reserved</p> 
      </div>
    </div>
  </footer>
  
  <script src="scripts/bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="scripts/bootstrap/js/bootstrap.min.js"></script>
  <script src="scripts/bootstrap/js/jquery.easing.min.js"></script>
  <script src="scripts/bootstrap/js/scrolling-nav.js"></script>
  <script src="scripts/bootstrap/js/jquery.prettyPhoto.js"></script>
  <script src="scripts/bootstrap/js/jquery.validate.js"></script>
  <script src="scripts/bootstrap/js/custom.js"></script>
</body>
</html>