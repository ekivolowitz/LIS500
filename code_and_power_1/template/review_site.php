<HTML>

    <?php
        $db = new SQLite3('../code_and_power_1.db');
        $filename = basename($_SERVER['PHP_SELF']);
        $hidden = True;
        $pageReview = [
            "common_app.php" => 2,
            "abby_the_librarian.php" => 1,
            "educational_toys_planet.php" => 3,
            "weather.php" => 4
        ];

        $pageNames = [
            "common_app.php" => "Common App",
            "abby_the_librarian.php" => "Abby the Librarian",
            "educational_toys_planet.php" => "Educational Toys Planet",
            "weather.php" => "Weather"
        ];


        $edu = "https://www.educationaltoysplanet.com/";
        $abby = "http://www.abbythelibrarian.com/";
        $common = "http://www.commonapp.org/faq";
        $weather = "http://w2.weather.gov/climate/";

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
                    case 'weather.php':
                        $url = $weather;
                        break;
                }

                $s = "INSERT INTO Review VALUES (" . "\"" . $filename . "\"" . ',' . $_POST['user_input'] . ", " . "\"" . $url . "\"" . ")";
                $db->exec($s);
            } else {
                echo "Must enter values 1 to 5.";
            }
        }
        $hidden = True;
        echo '
        <div class="col-sm-12 text-center">
            <form action="' . $filename . '" method="post">
                Rating: <input name="user_input" type="number" min="1" max="5">
                <input type="submit" onclick="run()">
            </form>
            <p> Our review of ' . $pageNames[$filename] . ' was: ' . $pageReview[$filename] . ' </p>
        </div>';
       


    ?>
    
</HTML>
