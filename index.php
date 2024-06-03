<?php

$movies = [
    "Les Aventuriers de l'arche perdue" => 1981,
    "Indiana Jones et le Temple maudit" => 1984,
    "Indiana Jones et la Dernière Croisade" => 1989
];

arsort($movies);

foreach ($movies as $key => $movie) {
    echo "$movie - $key.<br>" . PHP_EOL;
}