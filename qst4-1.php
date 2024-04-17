<?php

// Quest 4.1

$indiMovies = ["Indiana Jones and the Raiders of the Lost Ark" => 1981, "Indiana Jones and the Temple of Doom" => 1984, "Indiana Jones and the Last Crusade" => 1989];

arsort($indiMovies);

foreach ($indiMovies as $key => $value) {
    echo " " . $value . " - " . $key . PHP_EOL;
}
