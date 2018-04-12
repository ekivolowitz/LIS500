<html lang="en">
<?php include '../template/header.php'?>
<body>
<?php include '../template/navbar.php'?>

<!-- This chunk isn't php, it's just a basic table.--> 
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


<!-- Start of the php code-->
          <?php
	    // Connects the $db object to the sqlite3 database. Just give it the relative path to the 
	    // database from this file. So the db is one dir up from this file so I have a 
	    // prefixed ../
            $db = new SQLite3('../code_and_power_1.db');
            
			// Gets everything from the database
			$query = "SELECT * FROM text_review";
			$results = $db->query($query);
		
			// This is used to map the website name (accessed by the database in element 0 of each row) to a pretty name for displaying on the table	
			$cleanNames = array("Madison_police_dept.php" => "Madison Police Dept","abby_the_librarian.php" => "Abby the Librarian", "common_app.php" => "Common App", "educational_toys_planet.php" => "Educational Toys Planet");
            // Same thing as above 
	    $links = array("Madison_police_dept.php" => "http://www.abbythelibrarian.com/", "common_app.php" => "http://www.commonapp.org/", "educational_toys_planet.php" => "https://www.educationaltoysplanet.com/", "Madison_police_dept.php" => "https://www.cityofmadison.com/police/");
            
	    
	    // Cannot access the results directly so we have to user a generator in a while loop to fetch each row. 
	    // Essetially each row is stored in x, and then I used the variable contents in x to print the elements in the table out in a pretty way. 


	    // $x is formatted as such = ["SiteName from database", "Review of this website goes here"];
	    // This format is the same as a schema of the table (as it should be)

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
