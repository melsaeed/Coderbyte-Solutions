<?php

/*
 * For this challenge you will be returning a certain prime number
 * Input = 9 Output = 23
 * Input = 100 Output = 541
 */

function PrimeMover($num) {
    $PrimeNum = 0;
    for ($i = 0; $i < 10000; $i++) {
        if (checkPrimeNumber($i))
            $PrimeNum++;
        if ($PrimeNum == $num)
            return $i;
    }
}

function checkPrimeNumber($num) {
    if($num <= 1) return false;
    if($num == 2) return true;
    
    for($i = 2; $i < $num; $i++)
    {
        if($num%$i == 0 && $num != $i) 
            return false;
    }
    return true;
}

echo PrimeMover(fgets(fopen('php://stdin', 'r')));


