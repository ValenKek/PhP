<?php
$price = 100;
$inflation = 10;
$rise = 3.5;
$year=2021;

while($price<=150) {
    echo "Price in the year ". $year++. " is ". ($price+=(($price*$inflation)/100)) . " with ". $inflation. " inflation </br>";
    $inflation+=$rise;
}

