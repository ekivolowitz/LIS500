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
            

			$query = "SELECT * FROM text_review";
			$results = $db->query($query);
		
			
			$cleanNames = array("Madison_police_dept.php" => "Madison Police Dept","abby_the_librarian.php" => "Abby the Librarian", "common_app.php" => "Common App", "educational_toys_planet.php" => "Educational Toys Planet");
            $links = array("Madison_police_dept.php" => "http://www.abbythelibrarian.com/", "common_app.php" => "http://www.commonapp.org/", "educational_toys_planet.php" => "https://www.educationaltoysplanet.com/", "Madison_police_dept.php" => "https://www.cityofmadison.com/police/");
            while($x = $results->fetchArray()) {
			  echo '<tr style="border-color: #00;">';
              
              echo "<td style=\"border-color: #00; color: #ffff99;\">";
              echo "<p><a href=\"" . $links[$x[0]] . "\" _target=\"blank\">" . $cleanNames[$x[0]] . " </a></p>";
			  echo "</td>";
              

              echo '<td style="color: #ffff99;">';
			  echo $x[1];
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
