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

$inception = new Movie("Inception", "Christopher Nolan", 2010, [new Genre("Sci-Fi"), new Genre("Azione"), new Genre("Thriller")]);
$pulp = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [new Genre("Crime"), new Genre("Drammatico"), new Genre("Commedia nera")]);

var_dump($inception);
var_dump($pulp);

$inception->setDescription("Un film che fa");

echo $inception->toString();
echo $pulp->toString();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Film</title>
</head>

<body>


</body>

</html>