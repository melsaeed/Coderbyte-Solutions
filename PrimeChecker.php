<?php

/* 
 * For this challenge you will determine if you can arrange a number to be a prime number.
 * Using the PHP language, have the function PrimeChecker(num) take num and return 1 
 * if any arrangement of num comes out to be a prime number, otherwise return 0. 
 * For example: if num is 910, the output should be 1 because 910 can be arranged into 109 or 019, 
 * both of which are primes. 
 */

function PrimeChecker($num) {  
    $nums = rearrangements($num);
    foreach($nums as $check)
    {
        if(isPrime($check))
            return "1";
    }

    return "0"; 
         
}

function rearrangements($num) {
    if(strlen($num) == 3) {
    $res[] = $num[0].$num[1].$num[2];
    $res[] = $num[0].$num[2].$num[1];
    $res[] = $num[1].$num[0].$num[2];
    $res[] = $num[1].$num[2].$num[0];
    $res[] = $num[2].$num[0].$num[1];
    $res[] = $num[2].$num[1].$num[0];
    }
    
    if(strlen($num) == 2) {
    $res[] = $num[0].$num[1];
    $res[] = $num[1].$num[0];
    }
    if(strlen($num) == 1) {
    $res[] = $num[0];
    }
    return $res;
}
function isPrime($num){
    if($num <= 1) return false;
    if($num == 2) return true;
    
    for($i = 2; $i < $num; $i++)
    {
        if($num%$i == 0 && $num != $i) 
            return false;
    }
    return true;
}
   
echo PrimeChecker(fgets(fopen('php://stdin', 'r')));  
