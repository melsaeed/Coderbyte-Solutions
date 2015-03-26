<?php

/* 
 * Using the PHP language, have the function NumberSearch(str) take the str parameter, 
 * search for all the numbers in the string, add them together, then return that final number 
 * divided by the total amount of letters in the string. For example: if str is "Hello6 9World 2, Nic8e D7ay!"
 * the output should be 2. First if you add up all the numbers, 6 + 9 + 2 + 8 + 7 you get 32. 
 * Then there are 17 letters in the string. 32 / 17 = 1.882, 
 * and the final answer should be rounded to the nearest whole number, so the answer is 2. 
 * Only single digit numbers separated by spaces will be used throughout the whole string 
 * (So this won't ever be the case: hello44444 world). 
 * Each string will also have at least one letter. 
 * Input = "H3ello9-9" Output = 4
 * Input = "One Number*1*" Output = 0
 */


function NumberSearch($str) {  
    $str  = str_split($str);
    $addedNumbers = getAddedNumbers($str);
    $alphapets = getAlphapetsLength($str);
    $res = $addedNumbers/$alphapets;
    return round($res); 
}

function getAlphapetsLength($str) {
    $alphas = range('a', 'z');
    $res = null;
    foreach($str as $alpha)
        if(in_array(strtolower ($alpha), $alphas))
            $res .= $alpha;  
    return strlen($res);
}
function getAddedNumbers($str) {
    $nums = range(0,9);
    $res = null;
    foreach($str as $num)
        if(in_array($num, $nums))
            $res += $num;
    return $res;
}

echo NumberSearch(fgets(fopen('php://stdin', 'r')));  
