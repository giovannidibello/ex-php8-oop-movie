<?php

// Alleniamoci con la OOP di PHP immaginando delle classi pertinenti a Film e generi cinematografici

// Svolgimento
// Creare un file index.php in cui
// - è definita la classe Movie
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// - è definita una classe Genre
//   -> all'interno della classe sono dichiarate delle variabili d'istanza
//   -> all'interno della classe è definito un costruttore
// - ogni film ha un genere


// Bonus 1
// Modificare la classe Movie in modo che accetti piú di un genere.
// Bonus 2
// Aggiungere un Trait alla classe Movie con almeno una proprietà e un metodo.
// Bonus 3
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.

// Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
?>

<?php

require_once "./Models/Movie.php";
require_once "./Models/Genre.php";
require_once "./db.php";

// var_dump($inception);
// var_dump($pulp);

// echo $inception->toString();
// echo $pulp->toString();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- importo css -->
    <link rel="stylesheet" href="./Css/style.css">
    <title>OOP Movies</title>
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="page-title text-white">🎬 OOP Movies</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4 w-100">
            <?php foreach ($movies as $movie): ?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->director; ?> (<?php echo $movie->releaseYear; ?>)</h6>
                            <p class="card-text"><strong>Generi:</strong> <?php echo $movie->getArrayAsString(); ?></p>
                            <p class="card-text"><?php echo $movie->getDescription(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>