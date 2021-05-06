<?php if (!isset($_SESSION)) { session_start(); }?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk Tuk Service Siem Reap - Intermediate Website Package Example - Contact Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Please complete the form below if you wsh to send an email message.">
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
              <h1>Contact Me</h1>
            </div>
          </div>
          <div class="row">
            <div class="container-fluid">
              <div class="spacer"></div>
              <div class="well">
                <div id="contactwrap">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d52220.79811426275!2d103.8559281958017!3d13.391630698525022!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1453236181333"></iframe>
                </div>
                <div class="spacer"></div>
                <?php if ($_GET["s"] == "1") { echo "<h3 class='text-success'>Your Email Has Been Sent</h3>"; } ?>
                <h3>Location</h3>
                <p>Siem Reap, Cambodia.</p>
                <p>
                  <i class="fa fa-envelope"></i> E: keo@tuktukservicesiemreap.com<br/>
                  <i class="fa fa-phone-square"></i> M: +885 xxx xxx xxx
                </p>
                <div class="spacer"></div>
                <h4>Please complete the form below if you wsh to send an email message.</h4>
                <form method="post" name="form" id="form" novalidate>
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
                  <button type="submit" class="btn btn-primary" disabled>Submit</button>
                  <p>&nbsp;</p>
                  <p class="small">* All genuine emails replied to within 24 hours.</p>
                </form>
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
	  <script src="scripts/bootstrap/js/jquery.validate.js"></script>
    <script src="scripts/bootstrap/js/custom.js"></script>
  </body>
</html>
