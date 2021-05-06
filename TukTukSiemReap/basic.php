<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("scripts/template/coremeta.php"); ?>    
    <title>Basic Website Package</title>
    <meta name="description" content="Our basic website package consists of a single page layout with multiple sections, including: About, Services, Gallery and Contact details.">
    <meta name="keywords" content="">
    <?php include("scripts/template/corehead.php"); ?>
  </head>

  <body>
	  <?php include("scripts/template/analytics.php"); ?>
	  <?php include("scripts/template/navbar.php"); ?>
    
    <div id="blue">
      <div class="container">
        <div class="row">
          <h3>Basic Website Package.</h3>
        </div>
      </div>
    </div>
    
    <div class="container mt">
      <div class="col-lg-10 col-lg-offset-1 centered">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/packages/basic/slider1.jpg" alt="Basic Package - Default Theme">
            </div>
            <div class="item">
              <img src="images/packages/basic/slider2.jpg" alt="Basic Package - United Theme">
            </div>
            <div class="item">
              <img src="images/packages/basic/slider3.jpg" alt="Basic Package - Cyborg Theme">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="container">
          <div class="col-sm-10 col-sm-offset-1 centered">
            <div class="spacing"></div>
            <p>You can view an example <strong>Basic Website Package</strong> using the dropdown below to select one of the many <em>colour themes</em> which are available:</p>
          </div>
          <div class="col-sm-10 col-sm-offset-1 col-lg-4 col-lg-offset-4">
            <div class="form-group">
              <div class="input-group has-success">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                <select name="themeSelect" id="themeSelect" class="form-control">
                  <option value="" selected="selected">Select A Theme...</option>
                  <option value="default">Default</option>
                  <option value="cerulean">Cerulean</option>
                  <option value="cosmo">Cosmo</option>
                  <option value="cyborg">Cyborg</option>
                  <option value="darkly">Darkly</option>
                  <option value="flatly">Flatly</option>
                  <option value="journal">Journal</option>
                  <option value="lumen">Lumen</option>
                  <option value="paper">Paper</option>
                  <option value="readable">Readable</option>
                  <option value="sandstone">Sandstone</option>
                  <option value="simplex">Simplex</option>
                  <option value="slate">Slate</option>
                  <option value="spacelab">Spacelab</option>
                  <option value="superhero">Superhero</option>
                  <option value="united">United</option>
                  <option value="yeti">Yeti</option>
                </select>
                <span class="input-group-btn">
                <button name="viewTheme" id="viewTheme" class="btn btn-success" type="button">View Theme</button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-lg-5 col-lg-offset-1">
        <div class="spacing"></div>
        <h4>Basic Website Package.</h4>
        <p>Our basic website package consists of a single page layout with multiple sections, including: About, Services, Gallery and Contact details.</p>
        <p>With this package you not only get a <em>mobile friendly</em> website designed to fit your business, but also an <strong>essential marketing tool</strong> for generating new enquiries and customers. This package is great for anyone in need of a simple online presence without the cost of a bigger multi page website.</p>
        <p>Emphasis on simplicity and clean design are very important these days and so we will give your website a look and feel which <strong>inspires confidence in your customers</strong>. We also ensure that pages are <em>optimised for fast and efficient downloading</em>, meaning you will not lose customers, waiting for pages to load.</p>
        <p><strong>We could have your website online in just a few days.</strong></p>
      </div>
        
      <div class="col-lg-4 col-lg-offset-1">
          <div class="spacing"></div>
          <div class="panel panel-success text-center">
            <div class="panel-heading"> 
              <h3 class="panel-title">Package Details</h3>
            </div>
            <ul class="list-group list-group-item-success">
              <li class="list-group-item"><span class="price"><strong>$75</strong></span></li>
              <li class="list-group-item"><strong>1</strong> Page</li>
              <li class="list-group-item"><strong>Unique</strong> Domain Name</li>
              <li class="list-group-item"><strong>Personal</strong> Email Account</li>
              <li class="list-group-item"><strong>25</strong> Photo Gallery</li>
              <li class="list-group-item"><strong>Integrated</strong> Social Media Profiles</li>
              <li class="list-group-item"><a href="contact.php" class="btn btn-success">Contact Us.</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <p class="centered">* Package includes 1 year domain and hosting charge. Subsequent years are charged at $20 per year.</p>
        </div>
      </div>
    </div>
        
    <?php include("scripts/template/testimonials.php"); ?>
    <?php include("scripts/template/footer.php"); ?>
    
    <?php include("scripts/template/corescripts.php"); ?>
  </body>
</html>