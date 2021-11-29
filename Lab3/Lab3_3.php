<?php
$price = 100;
$inflation = 10;
$rise = 3.5;

for($year=2021; $year<=2021+10; $price > 170 ? $inflation-=$rise : $inflation+=$rise, $year++)
{
    echo "Price in the year ".$year. " is ". ($price+=(($price*$inflation)/100)) . " with ". $inflation. " inflation </br>";
    //$inflation+=$rise;
}


