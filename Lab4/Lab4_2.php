<?php
$product1 = "Product 1 Name";
$product2 = "Product 2 Name";
$product3 = "Product 3 Name";
$price1 = 11;
$price2 = 22;
$price3 = 33;


$products = array($product1 => $price1, $product2 => $price3, $product3 => $price3);


function maxProduct($products)
{
    $value = max($products);
    $key = array_search($value, $products);
    echo ("Max : " . $key. " : ". $value."<br>");
}
function printProduct($productName, $productPrice)
{
    echo($productName . ",  : " . $productPrice . "</br>");
}

function TableDictionary($products){
    $result = "<table border=1>";
    $result .= "<tr>";
    $result .= "<td>Name</td>";
    $result .= "<td>Value</td>";
    $result .= "</tr>";
    foreach ($products as $key=>$value){
        $result.="<tr><td>$key</trtd> <td>$value</td></tr>";
    }
    $result .= "</table>";
    echo $result;
}
TableDictionary($products);
maxProduct($products);
echo ("Average : " . array_sum($products)/count($products));