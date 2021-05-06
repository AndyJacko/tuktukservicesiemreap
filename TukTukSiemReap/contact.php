<?php require("scripts/emailer/emailfunctions.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php include("scripts/template/coremeta.php"); ?>    
    <title>Contact Us</title>
    <meta name="description" content="Please complete the form below if you wsh to send us a message. Alternatively you can use the contact details provided.">
    <meta name="keywords" content="">
	  <?php include("scripts/template/corehead.php"); ?>
  </head>
  
  <body>
	  <?php include("scripts/template/analytics.php"); ?>
	  <?php include("scripts/template/navbar.php"); ?>
    
    <div id="blue">
      <div class="container">
        <div class="row">
          <h3>Contact.</h3>
        </div>
      </div>
    </div>
    
    <div id="contactwrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d52220.79811426275!2d103.8559281958017!3d13.391630698525022!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1453236181333"></iframe>
    </div>
    
    <div class="container mtb">
      <div class="row">
        <div class="col-lg-8">
          <h4>Get In Touch!</h4>
          <div class="hline"></div>
          <?php if ($_GET["s"] == "1") { echo "<h3 class='text-success'>Your Email Has Been Sent</h3>"; } ?>
          <p>Please complete the form below if you wsh to send us a message. Alternatively you can use the contact details provided.</p>
          <form id="form" name="form" method="post" action="contact.php" novalidate>
            <div class="form-group">
              <label for="YourName">Your Name</label>
              <input type="text" name="YourName" id="YourName" class="form-control" value="<?php echo $_POST["YourName"]; ?>">
            </div>
            <div class="form-group">
              <label for="YourEmail">Email address</label>
              <input type="email" name="YourEmail" id="YourEmail" class="form-control" value="<?php echo $_POST["YourEmail"]; ?>">
            </div>
            <div class="form-group">
              <label for="ContactSubject">Subject</label>
              <input type="text" name="ContactSubject" id="ContactSubject" class="form-control" value="<?php echo $_POST["ContactSubject"]; ?>">
            </div>
            <div class="form-group">
              <label for="YourComment">Message</label>
              <textarea name="YourComment" id="YourComment" class="form-control"  rows="3"><?php echo $_POST["YourComment"]; ?></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
            </div>
            <button type="submit" class="btn btn-theme" disabled>Submit</button>
          </form>
        </div>
        
        <div class="col-lg-4">
          <h4>Our Location</h4>
          <div class="hline"></div>
          <p>
            Svay Dangkum,<br/>
            Siem Reap,<br/>
            Cambodia,<br/>
            17252
          </p>
          <p>
            <i class="fa fa-envelope"></i> E: andy@tuktukservicesiemreap.com<br/>
            <i class="fa fa-phone-square"></i> M: +885 965 621 881
          </p>
          <p>We aim to respond to all genuine enquiries within 24 hours.</p>
        </div>
      </div>
    </div>
    <?php include("scripts/template/testimonials.php"); ?>
    <?php include("scripts/template/footer.php"); ?>
    <?php include("scripts/template/corescripts.php"); ?>
  </body>
</html>