<?php if (!isset($_SESSION)) { session_start(); }?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuk Tuk Service Siem Reap - Pro Website Package Example - Gallery Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I have taken photo of many customers and places in Cambodia, please view my gallery.">
    <meta name="author" content="Andy Jacko">
    <link href="scripts/bootstrap/css/themes/bootstrap-<?php echo $_SESSION["theme"]; ?>.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/prettyPhoto.css" rel="stylesheet">
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
              <h1>Photo Gallery</h1>
            </div>
          </div>
          <div class="row">
            <div class="container-fluid">
              <div class="spacer"></div>

              <section id="gallery" class="well">
                <p>I have taken photo of many customers and places in Cambodia, please view my gallery.</p>
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
              </section>
            </div>
          </div>
        </div>
        <?php include ("scripts/template/colright3.php");?>
      </div>
    </div>
    <?php include ("scripts/template/footer.php");?>
    <script src="scripts/bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="scripts/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/bootstrap/js/jquery.prettyPhoto.js"></script>
    <script>
    (function($) {
      $(document).ready(function(){
          $("area[rel^='prettyPhoto']").prettyPhoto();
          $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({allow_expand: false,counter_separator_label: ' of ',overlay_gallery: false,social_tools: false,deeplinking: false,theme:'light_rounded',autoplay_slideshow: false});
      });
    })(jQuery);
    </script>
  </body>
</html>
