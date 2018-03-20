<html lang="en">
<?php include '../template/header.php'?>
<body>
<?php include '../template/navbar.php'?>


<div class="container-fluid text-center">    
  <div class="row content" style="height: 0px;">
    <div class="col-sm-2 sidenav"></div>
    <div class="col-sm-8 text-left"> 
      <h1>Results</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Website</th>
            <th scope="col">Rating</th>
          </tr>
        </thead>
        <tbody>
          <?php

            $db = new SQLite3('../code_and_power_1.db');
            

            $query = "SELECT AVG(rating) FROM Review where website=\"weather.php\";";
            $query1 = "SELECT AVG(rating) FROM Review where website=\"abby_the_librarian.php\";";
            $query2 = "SELECT AVG(rating) FROM Review where website=\"common_app.php\";";
            $query3 = "SELECT AVG(rating) FROM Review where website=\"educational_toys_planet.php\";";
            
            $queryWeather = $db->query($query);
            $queryAbby = $db->query($query1);
            $queryCommon = $db->query($query2);
            $queryEdu = $db->query($query3);


            $avgWeather = $queryWeather->fetchArray()[0];
            $avgAbby = $queryAbby->fetchArray()[0];
            $avgCommon = $queryCommon->fetchArray()[0];
            $avgEdu = $queryEdu->fetchArray()[0];

            $averages = array($avgAbby, $avgCommon, $avgEdu, $avgWeather);
            $names = array("Abby the Librarian", "Common App", "Educational Toys Planet", "Weather");
            $links = array("http://www.abbythelibrarian.com/", "http://www.commonapp.org/faq", "https://www.educationaltoysplanet.com/", "http://w2.weather.gov/climate/");

            for($i = 0; $i < 4; $i++) {
              echo '<tr>';
              
              echo "<td>";

              echo "<a href=\"" . $links[i] . "\" target=\"blank\">$names[$i]</a>";

              echo "</td>";
              
    
              echo '<td>';
              echo $averages[$i];
              echo '</td>';
              
              echo '</tr>'; 
            
            }

          ?>
        </tbody>
      </table>
      <hr>
    </div>
  </div>
  <div class="col-sm-2 sidenav"></div>



</div>
</body>
</html>
