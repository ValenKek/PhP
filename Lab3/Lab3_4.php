<?php

$phoneBrands = array("Xiaomi", "Honor", "IPhone", "Samsung",  "Pixel");
$phoneBrands[5]="Motorola";
$phoneBrands[5]="Nokia";

for ($i = 0, $count = count($phoneBrands); $i < $count; $i++){
    echo("$phoneBrands[$i].</br>");
}

echo("</br>");

sort($phoneBrands, SORT_STRING);

for ($i = 0, $count = count($phoneBrands); $i < $count; $i++){
    echo($phoneBrands[$i]."</br>");
}
