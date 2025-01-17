<?php
$multiarray = [
    [1, "Rocky", "New York"],
    [2, "Vicky", "India"],
    [3, "Ricky", "Australia"],
    [4, "Micky", "Canada"],
    [5, "Sicky", "Russia"],
    [6, "Dicky", "China"],
    [7, "Nicky", "Japan"],
    [8, "Kicky", "Brazil"],
    [9, "Licky", "Argentina"],
    [10, "Picky", "South Africa"]
];
//echo " <pre>";
//print_r($multiarray);
//echo " <pre>";

for ($i = 0; $i < count($multiarray); $i++) {
    //print_r($multiarray[$i]);

    for ($y = 0; $y < count($multiarray[$i]); $y++) {
        echo "{$multiarray[$i][$y]} <br>";
    }
}
