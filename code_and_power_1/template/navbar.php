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

      if($filename === 'index.php') {
        echo '<li class="active"><a href="/index.php">Home</a></li>';
      } else {
        echo '<li><a href="/index.php">Home</a></li>';
      }

      if($filename === 'abby_the_librarian.php') {
        echo '<li class="active"><a href="/pages/abby_the_librarian.php">Abby The Librarian</a></li>';
      } else {
        echo '<li><a href="/pages/abby_the_librarian.php">Abby The Librarian</a></li>';
      }
      if ($filename === "common_app.php") {
        echo '<li class="active"><a href="/pages/common_app.php">Common App</a></li>';
      } else {
        echo '<li><a href="/pages/common_app.php">Common App</a></li>';
      }
      
      if ($filename === "educational_toys_planet.php") {
        echo '<li class="active"><a href="/pages/educational_toys_planet.php">Educational Toys Planet</a></li>';
      } else {
        echo '<li><a href="/pages/educational_toys_planet.php">Educational Toys Planet</a></li>';
      }
      
      if ($filename === "Madison_police_dept.php") {
        echo '<li class="active"><a href="/pages/Madison_police_dept.php">Madison Police Dept</a></li>';
      } else {
        echo '<li><a href="/pages/Madison_police_dept.php">Madison Police Dept</a></li>';
      }
      if($filename === 'ratings.php') {
        echo '<li class="active"><a href="/pages/ratings.php">Ratings</a></li>';
      } else {
        echo '<li><a href="/pages/ratings.php">Ratings</a></li>';
      }
      if($filename === 'summary.php') {
        echo '<li class="active"><a href="/pages/summary.php">How to Improve</a></li>';
      } else {
        echo '<li><a href="/pages/summary.php">How to Improve</a></li>';
      }
echo '</ul>
  </div>
</div>
</nav>';
?>
