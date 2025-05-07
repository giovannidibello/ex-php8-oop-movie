<?php
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

$inception = new Movie("Inception", "Christopher Nolan", 2010, [
    new Genre("Sci-Fi"),
    new Genre("Azione"),
    new Genre("Thriller")
]);

$inception->setDescription("Un ladro esperto nei sogni entra nella mente delle persone per rubare segreti.");


$pulp = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [
    new Genre("Crime"),
    new Genre("Drammatico"),
    new Genre("Commedia nera")
]);

$pulp->setDescription("Storie criminali intrecciate in stile Tarantino.");

$movies = [$inception, $pulp];
