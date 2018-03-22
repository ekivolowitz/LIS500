<html lang="en">
<?php include '../template/header.php'?>
<body>
<?php include '../template/navbar.php'?>


<div class="container-fluid text-center">    
  <div class="row content" style="height: 0px;">
    <div class="col-sm-2 sidenav"></div>
    <div class="col-sm-8 text-left"> 
      <h1>Results</h1>
      <table class="table" style="border-color: #00;">
        <thead>
          <tr>
            <th scope="col" style="color: #FFFF99;">Website</th>
            <th scope="col"style="color: #FFFF99;">Rating</th>
          </tr>
        </thead>
        <tbody>
          <?php

            $db = new SQLite3('../code_and_power_1.db');
            

            $query = "SELECT AVG(rating) FROM Review where website=\"Madison_police_dept.php\";";
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
            $names = array("Abby the Librarian", "Common App", "Educational Toys Planet", "Madison Police Dept");
            $links = array("http://www.abbythelibrarian.com/", "http://www.commonapp.org/faq", "https://www.educationaltoysplanet.com/", "https://www.cityofmadison.com/police/");
            for($i = 0; $i < 4; $i++) {
              echo '<tr style="border-color: #00;">';
              
              echo "<td style=\"border-color: #00; color: #ffff99;\">";
              echo "<a href=\" $links[$i]\" target=\"_blank\">$names[$i]</a>";

              echo "</td>";
              
              $formattedNumber = number_format($averages[$i], 2);

              echo '<td style="color: #ffff99;">';
              echo $formattedNumber;
              echo '</td>';
              
              echo '</tr>'; 
            
            }

          ?>
        </tbody>
      </table>
	  <h2>Rating Methodology</h2>
      <p>We rated our websites on an incremental sliding scale of a 1 point minimum to a 6 point maximum. Each sub-topic was awarded either 0, 1, or 2, 
	  points depending on how problematic the site became when evaluated by our 3 access-related criteria: Platform Compatibility, 
	  Navigation and Usability, and Target Audience.</p>
	  
      

      <hr>
    </div>
  </div>
  <div class="col-sm-2 sidenav"></div>



</div>
</body>
</html>
