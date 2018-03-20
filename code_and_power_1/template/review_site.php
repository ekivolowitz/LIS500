<?php
    $db = new SQLite3('../code_and_power_1.db');
    $filename = basename($_SERVER['PHP_SELF']);

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


    echo '
    <div class="col-sm-12 text-center">
        <form action="' . $filename . '" method="post">
            Rating: <input name="user_input" type="number" min="1" max="5">
            <input type="submit">
        </form>
    </div>';
?>
