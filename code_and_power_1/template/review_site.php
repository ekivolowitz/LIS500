<HTML>
    <?php
        $db = new SQLite3('../code_and_power_1.db');
        
	// This gets the filename of the page we're on. So if we were on 
	// localhost:5000/pages/abby_the_librarian.php, 
	// $filename would be abby_the_librarian.php
	$filename = basename($_SERVER['PHP_SELF']);
        $pageReview = [
            "common_app.php" => 5,
            "abby_the_librarian.php" => 5,
            "educational_toys_planet.php" => 3,
            "Madison_police_dept.php" =>3 
        ];

        $pageNames = [
            "common_app.php" => "Common App",
            "abby_the_librarian.php" => "Abby the Librarian",
            "educational_toys_planet.php" => "Educational Toys Planet",
            "Madison_police_dept.php" => "Madison Police Dept"
        ];


        $edu = "https://www.educationaltoysplanet.com/";
        $abby = "http://www.abbythelibrarian.com/";
        $common = "http://www.commonapp.org/faq";
        $weather = "https://www.cityofmadison.com/police/";
	// This is code for handling the 1 -> 6 input
        if(isset($_POST['user_input'])) {
            if($_POST['user_input'] !== "") {
                $url = "";
                switch ($filename) {
                    case 'abby_the_librarian.php':
                        $url = $abby;
                        break;
                    case 'common_app.php':
                        $url = $common;
                        break;
                    case 'educational_toys_planet.php':
                        $url = $edu;
                        break;
                    case 'Madison_police_dept.php':
                        $url = $weather;
                        break;
                }

                $s = "INSERT INTO Review VALUES (" . "\"" . $filename . "\"" . ',' . $_POST['user_input'] . ", " . "\"" . $url . "\"" . ")";
                $db->exec($s);
            } else {
                echo "Must enter values 1 to 6.";
            }
        }
       	// This is code for handling the text review of the website.  
        if(isset($_POST['review'])) {
            if($_POST['review'] !== "") {
		// This formulates the query for the server to run in the database. 
        // You need to use \" for this to work properly because sqlite3 is expecting the quotes to denote text. 
                $isGoodMobile = 0;
                $isGoodDesktop = 0;
                if($_POST['isGoodMobile'] == "on")
                    $isGoodMobile = 1;
                if($_POST['isGoodDesktop'] == "on")
                    $isGoodDesktop = 1;
                $s = "INSERT INTO text_review VALUES (\"" . $filename . "\",\"" . $_POST['review'] . "\", " . $isGoodMobile . ", " . $isGoodDesktop . ")";
                echo $s;
                $db->exec($s);
            } 

        }

        echo '
        <div class="col-sm-12 text-center">
            <form action="' . $filename . '" method="post">
                Rating: <input name="user_input" type="number" min="1" max="6">
                <input type="submit">
            </form>
            <p> Our review of ' . $pageNames[$filename] . ' was: ' . $pageReview[$filename] . ' </p>
        </div>';
        echo '
            <div class="col-sm-12 text-center">
                <form action="' . $filename . '" method="post">
                    <p>
                        We are considering a population that doesn\'t have consistent
                        internet access, and are hoping to design a site to allow offline form access. Which device
                        seems most useful for the population?
                        <br><br>
                        Please select one, or both mediums. 
                    </p>
                    <p>
                    <input type="checkbox" name="isGoodMobile"> Mobile</input>
                    <br>
                    <input type="checkbox" name="isGoodDesktop">Desktop
                    </p>
                    <p>Other thoughts?</p>
                    <textarea rows="4" cols="50" name="review"></textarea>
                    <br>
                    <input type="submit">
                </form>
            </div>';
    ?>
</HTML>
