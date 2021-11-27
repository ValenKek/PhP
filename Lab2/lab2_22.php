<?php
$product1 = "Product 1 Name";
$product2 = "Product 2 Name";
$product3 = "Product 3 Name";
$price1 = 11;
$price2 = 22;
$price3 = 33;
$av=($price1+$price2+$price3)/3;
?>
<table border="1">
    <tr>
        <td> <?=$product1?></td>
<td> <?=$price1?></td>
</tr>
<tr>
    <td><?=$product2?></td>
    <td><?=$price2?></td>
</tr>
<tr>
    <td><?=$product3?></td>
    <td><?=$price3?></td>
</tr>
</table>

Average price:
<?=$av?>
<br>
Most expensive product:
<?php
$maxPrice=$price1;
$maxProduct=$product1;
if($price2 > $maxPrice) {
    $maxPrice = $price2;
    $maxProduct = $product2;
}
if($price3 > $maxPrice) {
    $maxPrice = $price3;
    $maxProduct = $product3;
}
echo $maxProduct. ":". $maxPrice;

?>
