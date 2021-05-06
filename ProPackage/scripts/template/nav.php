
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="https://tuktuk-p.andyjacko.com/">Keo Khemrin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if ($_SERVER['PHP_SELF'] == "/index.php") echo 'class="active"'; ?>><a href="https://tuktuk-p.andyjacko.com/">Home</a></li>
        <li <?php if ($_SERVER['PHP_SELF'] == "/about.php") echo 'class="active"'; ?>><a href="/about.php">About</a></li>
        <li <?php if ($_SERVER['PHP_SELF'] == "/services.php") echo 'class="active"'; ?>><a href="/services.php">Services</a></li>
        <li <?php if ($_SERVER['PHP_SELF'] == "/gallery.php") echo 'class="active"'; ?>><a href="/gallery.php">Gallery</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($_SERVER['PHP_SELF'] == "/contact.php") echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
