<?php
echo '<nav class="navbar navbar-inverse">
<div class="container-fluid" id="nav_center">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
    <a class="navbar-brand" href="index.php" style="padding: 0px 0px 0px"><img src="logo-small.png" style="width: 75px; height: 50px"></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">';

      $filename = basename($_SERVER['PHP_SELF']);
      if ($filename == 'index.php') {
        echo '<li class="active"><a href="index.php">Home</a></li>';
      } else {
        echo '<li><a href="index.php">Home</a></li>';
      }
      if ($filename == 'about.php') {
        echo '<li class="active"><a href="about.php">About</a></li>';
      } else {
        echo '<li><a href="about.php">About</a></li>';
      }
      if ($filename == 'get-started.php') {
        echo '<li class="active"><a href="get-started.php">Getting Started</a></li>';
      } else {
        echo '<li><a href="get-started.php">Getting Started</a></li>';
      }
      if ($filename == 'jargon.php') {
        echo '<li class="active"><a href="jargon.php">Jargon</a></li>';
      } else {
        echo '<li><a href="jargon.php">Jargon</a></li>';
      }
      if ($filename == 'learn-more.php') {
        echo '<li class="active"><a href="learn-more.php">Learn More</a></li>';
      } else {
        echo '<li><a href="learn-more.php">Learn More</a></li>';
      }
      if ($filename == 'participate.php') {
        echo '<li class="active"><a href="participate.php">Participate</a></li>';
      } else {
        echo '<li><a href="participate.php">Participate</a></li>';
      }
echo '</ul>
  </div>
</div>
</nav>';
?>
