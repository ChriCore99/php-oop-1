<?php

    $Array_films = [];

    class Production{
        public $titolo;
        public $lingua;
        public $voto;

        function __construct($_titolo, $_lingua, $_voto){
            $this->titolo = $_titolo;
            $this->lingua = $_lingua;
            $this->voto = $_voto;
        }
    }

    $Avengers_end_game = new Production('Avengers end game', 'English', 9);
    $Array_films[] = $Avengers_end_game;

    $The_interview = new Production('The interview', 'English', 7);
    $Array_films[] = $The_interview;

    $Mare_fuori = new Production('Mare fuori', 'Italiano', 5);
    $Array_films[] = $Mare_fuori; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <?php
        foreach($Array_films as $film){
            ?>
            <div class="filmInfo">
                <span><?php echo $film->titolo ?> <br></span>

                <span><?php echo $film->lingua ?> <br></span>

                <span><?php echo $film->voto ?></span>
            </div>
            <?php
        }
    ?>
</div>

</body>
</html>