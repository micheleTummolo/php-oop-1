<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    /* Creazione classe Movie */
    class Movie {
        /* Creazione degli attributi della classe */
        public $titolo;
        public $titolo_originale;
        public $durata;
        public $genere;
        public $voto;

        /* Creazione Constract della calle */
        public function __construct ($_titolo, $_titolo_originale, $_durata, $_genere, $_voto) {
            $this->titolo = $_titolo;
            $this->titolo_originale = $_titolo_originale;
            $this->durata = $_durata;
            $this->genere = $_genere; 
            $this->voto = $_voto; 
        }
    }
    /* Assegnazione valori agli attrivuti della classe tramite constract */
    $movie_1 = new Movie('Il cavaliere oscuro', 'The Dark knight','2h 23min',['Azione', 'Poliziesco', 'Drammatico'], 9);
    $movie_2 = new Movie('Pulp Fiction', 'Pulp Fiction', '2h 34min', ['Poliziesco', 'Drammatico'], 8,9);

    /* Assegnazione valori agli attrivuti della classe tramite l'operatore -> */
    /* $movie_1->titolo = 'Il cavaliere oscuro';
    $movie_1->titolo_originale = 'The Dark knight';
    $movie_1->durata = '2h 23min';
    $movie_1->genere = ['azione', 'poliziesco', 'drammatico'];
    $movie_1->voto = 9; */

    echo "<pre>";
    var_dump($movie_1);
    var_dump($movie_2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>

</body>
</html>