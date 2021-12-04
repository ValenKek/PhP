<?php
$products = array("Alpha" => 55, "Beta" => 83, "Gamma"=> 41, "Delta"=> 67, "Epsilon"=> 99, "Zeta"=> 33, "Eta"=>11);

echo CurrencyConverter($products);

function CurrencyConverter ($products)
{
    $euro=33;
    $dollar=29;

    $productsKeys = array_keys($products);
    $productStartPrice = array_values($products);

    $productDollarPrice = array();
    $productEuroPrice = array();

    $result="<table border=1> ";

    for($i = 0, $count = count($productsKeys); $i < $count;$i++){
        $productDollarPrice[$i] =round($productStartPrice[$i] / $dollar, 3);
        $productEuroPrice[$i] =round($productStartPrice[$i] / $euro, 3);

        $result .= "<tr> <td> $productsKeys[$i] </td> <td>$productStartPrice[$i] uan </td> <td>$productDollarPrice[$i] usd </td> <td>$productEuroPrice[$i] eur </td> </tr>";
    }
    $result .=" </table>";
    return $result;
}