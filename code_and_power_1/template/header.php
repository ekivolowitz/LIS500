<?php
    echo '<head>
    <title>';

    $filename = basename($_SERVER['PHP_SELF']);

    if($filename === 'abby_the_librarian.php') {
        echo "Abby the Librarian";
    } elseif ($filename === 'about.php') {
        echo 'About';
    } elseif ($filename === "common_app.php") {
        echo "Common App";
    } elseif ($filename === "educational_toys_planet.php") {
        echo "Educational Toys Planet";
    } elseif ($filename === "weather.php") {
        echo "Weather";
    } elseif ($filename === "ratings.php") {
        echo "Rating";
    } elseif ($filename === "index.php") {
        echo "Home";
    } elseif ($filename === "ReadReviews.php") {
        echo "Reviews";
    } elseif ($filename === "summary.php") {
        echo "Summary";
    } else {
        echo "Error";
    }

    
    echo '</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylings/main.css">
    <script src="/template/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>'
?>
