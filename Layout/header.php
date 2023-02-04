<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>

    <!-- Autore -->
    <meta name="author" content="Simone Fera">
    <!-- Descrizione del sito -->
    <meta name="description" content="primo utilizzo della programmazione PHP">
    <!-- Refresh permette il client-pull (refrescia la pagina in automatico) -->
    <!--  <meta http-equiv="refresh" content="40"> -->

    <!-- Persona CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <h1>Movie List</h1>
    <div class="card" style="width: 18rem;">
        <img src="<? echo $movie->images; ?>" class="card-img-top" alt="<? echo $movie->title; ?>">
        <div class="card-body">
            
            <h2 class="card-title">Titolo del film</h2>
            <p class="card-text">Informazioni sul film come regista e generi</p>


            <? foreach ($movies as $movie) {
                echo '<div class="card" style="width: 18rem;">';
                echo '  <img src="" class="card-img-top" alt="">';
                echo '  <div class="card-body">';
                echo '    <h5 class="card-title">' . $movie->title . '</h5>';
                echo '    <p class="card-text">' . $movie->displayInfo() . '</p>';
                echo '  </div>';
                echo '</div>';
                echo '<br>';
            } ?>
        </div>
    </div>
</body>

</html>