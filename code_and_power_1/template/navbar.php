<?php
echo '<nav class="navbar navbar-inverse">
<div class="container-fluid" id="nav_center">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">';

      $filename = basename($_SERVER['PHP_SELF']);
      if ($filename == 'index.php') {
        echo '<li class="active"><a href="index.php">Home</a></li>';
      } else {
        echo '<li><a href="../index.php">Home</a></li>';
      }
      if ($filename == 'about.php') {
        echo '<li class="active"><a href="../pages/about.php">About</a></li>';
      } else {
        echo '<li><a href="../pages/about.php">About</a></li>';
      }
echo '</ul>
  </div>
</div>
</nav>';
?>
