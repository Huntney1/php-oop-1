<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php

include "Layout/header.php";
include "<Models/movie.php";
include "db.php";     

foreach ($movies as $movie) {
    echo "<h2>" . $movie->title . "</h2>";
    $movie->displayInfo();
    echo "<br>";
  }

  include "Layout/footer.php";

?>
