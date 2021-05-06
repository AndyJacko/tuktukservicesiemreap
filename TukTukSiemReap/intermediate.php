
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("scripts/template/coremeta.php"); ?>    
    <title>Intermediate Website Package</title>
    <meta name="description" content="Our intermediate website package consists of 2 to 8 pages which could include: Home page, About page, Services page, Gallery page and Contact page.">
    <meta name="keywords" content="">
    <?php include("scripts/template/corehead.php"); ?>
  </head>

  <body>
	  <?php include("scripts/template/analytics.php"); ?>
	  <?php include("scripts/template/navbar.php"); ?>
    
    <div id="blue">
      <div class="container">
        <div class="row">
          <h3>Intermediate Website Package.</h3>
        </div>
      </div>
    </div>
    
    <div class="container mt">
      <div class="col-lg-10 col-lg-offset-1 centered">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/packages/intermediate/slider1.jpg" alt="Intermediate Package - United Theme">
            </div>
            <div class="item">
              <img src="images/packages/intermediate/slider2.jpg" alt="Intermediate Package - Sandstone Theme">
            </div>
            <div class="item">
              <img src="images/packages/intermediate/slider3.jpg" alt="Intermediate Package - Darkly Theme">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="container">
          <div class="col-sm-10 col-sm-offset-1 centered">
            <div class="spacing"></div>
            <p>You can view an example <strong>Intermediate Website Package</strong> using the dropdown below to select one of the many <em>colour themes</em> which are available:</p>
          </div>
          <div class="col-sm-10 col-sm-offset-1 col-lg-4 col-lg-offset-4">
            <div class="form-group">
              <div class="input-group has-warning">
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
                <button name="viewThemeInt" id="viewThemeInt" class="btn btn-warning" type="button">View Theme</button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="row">
        <div class="col-lg-5 col-lg-offset-1">
          <div class="spacing"></div>
          <h4>Intermediate Website Package.</h4>
          <p>Our intermediate website package consists of 2 to 8 pages which could include: Home page, About page, Services page, Gallery page, Contact page and 3 pages of additional content.</p>
          <p>Having more than just a good design, <strong>a website should be straightforward and intuitive to use</strong>. Our unique approach involves more than just looks - it's about leaving a lasting impression on your customers, so they come back again, and again.</p>
          <p>All our websites are designed with the Search Engines in mind. <em>Meaning that Google will find your website easily</em>. Responsive designs mean that your website will work on <strong>any device your customers are using</strong>. This is another major factor Google uses to list your website higher in their search results.</p>
          <p><strong>Are ready to get started on your website?</strong></p>
        </div>
        
        <div class="col-lg-4 col-lg-offset-1">
          <div class="spacing"></div>
          <div class="panel panel-warning text-center">
            <div class="panel-heading"> 
              <h3 class="panel-title">Package Details</h3>
            </div>
            <ul class="list-group list-group-item-warning">
              <li class="list-group-item"><span class="price"><strong>$150</strong></span></li>
              <li class="list-group-item"><strong>2 - 8</strong> Pages</li>
              <li class="list-group-item"><strong>Unique</strong> Domain Name</li>
              <li class="list-group-item"><strong>Personal</strong> Email Account</li>
              <li class="list-group-item"><strong>50</strong> Photo Gallery</li>
              <li class="list-group-item"><strong>Integrated</strong> Social Media Profiles</li>
              <li class="list-group-item"><a href="contact.php" class="btn btn-warning">Contact Us.</a></li>
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