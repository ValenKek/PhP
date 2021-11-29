<?php

$goods = array("goodsType3"=>200, "goodsType1" => 700, "goodsType2" => 400);
$goods["goodsType1"] = 250;
$goods["goodsType2"] = 550;

foreach ($goods as $key => $value) {
    echo("$key price : $value</br>");
}

echo("Goods quantity : ". count(array_values($goods))."</br>");

echo"Sum price : ".array_sum(array_values($goods)). "</br>";
echo"</br>";

sort($goods);
foreach ($goods as $key => $value) {
    echo("$key price : $value</br>");
}
echo"</br>";
asort($goods, SORT_NUMERIC);
foreach ($goods as $key => $value) {
    echo("$key price : $value</br>");
}
echo"</br>";

arsort($goods, SORT_NUMERIC);
foreach ($goods as $key => $value) {
    echo("$key price : $value</br>");
}
echo"</br>";

ksort($goods, SORT_STRING);
foreach ($goods as $key => $value) {
    echo("$key price : $value</br>");
}
echo"</br>";