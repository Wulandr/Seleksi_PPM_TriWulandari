<?php
$a = "Menu";
$aray = ['Makanan', 'Minuman', 'Parsel'];
$e = "ke";
for ($i = 1; $i <= 3; $i++) {
    echo $aray[$i - 1] . "</br>";
    for ($j = 1; $j <= 3; $j++) {
        echo $j . ". " . $a . " " . $aray[$i - 1] . " " . $e . " " . $j . "</br>";
    }
}
