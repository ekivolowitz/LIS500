<HTML>

    <?php
        $db = new SQLite3('../code_and_power_1.db');
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
        
        echo '
        <div class="col-sm-12 text-center">
            <form action="' . $filename . '" method="post">
                Rating: <input name="user_input" type="number" min="1" max="6">
                <input type="submit">
            </form>
            <p> Our review of ' . $pageNames[$filename] . ' was: ' . $pageReview[$filename] . ' </p>
        </div>';
    ?>
    
</HTML>
