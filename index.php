<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php

include "Layout/header.php";
include "Models/movie.php";
include "db.php";

?>

<!-- qui trovi il codice che dovrebbe essere in (header.php) -->

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

<div class="d-flex flex-wrap justify-content-around">

  <!-- Loop attraverso i film -->
  <?php foreach ($movies as $movie) : ?>

    <!-- <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="<?= $movie->images ?>" class="card-img-top" alt="locandina">
          <div class="card-body">
            <h5 class="card-title"><?= $movie->title ?></h5>
            <p class="card-text">Director: <?= $movie->director ?></p>
            <p class="card-text">Generes: <?= implode(", ", $movie->generes) ?></p>
          </div>
        </div>
      </div> -->

    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= $movie->images ?>" class="img-fluid rounded-start" alt="locandina">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $movie->title ?></h5>
            <p class="card-text">Director: <?= $movie->director ?></p>
            <p class="card-text">Generes: <?= implode(", ", $movie->generes) ?></p>
          </div>
        </div>
      </div>
    </div>


  <?php endforeach; ?>
  </div>
</body>

</html>

<!-- Include il file di footer -->
<?php include "Layout/footer.php"; ?>