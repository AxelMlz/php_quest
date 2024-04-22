<?php

// Quest 4.2

$indiMovies = ["Indiana Jones and the Raiders of the Lost Ark" => ["Harrison Ford", "Karen Allen", "Paul Freeman"], "Indiana Jones and the Temple of Doom" => ["Harrison Ford", "Kate Capshaw", "Ke Huy Quan"], "Indiana Jones and the Last Crusade" => ["Harrison Ford", "Sean Connery", "Alison Doody"]];


// echo "";
$keys = array_keys($indiMovies);

for ($i = 0; $i < count($indiMovies); $i++) {
    echo "Dans le film " . $keys[$i] . ", les acteurs principaux sont :  " . PHP_EOL;
    foreach ($indiMovies[$keys[$i]] as $value) {
        echo "_ " . $value . PHP_EOL;
    }
}
