<?php
function factorial($number): int
{
    if($number == 0){
        return 0;
    }
    $result = 1;
    for($i = 2; $i <= $number;++$i){
        $result *= $i;
    }
    return $result;
}
echo(factorial(9));
