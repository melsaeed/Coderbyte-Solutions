<?php

/*
 * Using the PHP language, have the function Division(num1,num2) 
 * take both parameters being passed and return the Greatest Common Factor. 
 * That is, return the greatest number that evenly goes into both numbers with no remainder.
 * For example: 12 and 16 both are divisible by 1, 2, and 4 so the output should be 4. 
 * The range for both parameters will be from 1 to 10^3.
 * Input = 7 & num2 = 3 Output = 1
 * Input = 36 & num2 = 54 Output = 18
 */

function Division($num1, $num2) {
    $num1_res = getDivisionNums($num1);
    $num2_res = getDivisionNums($num2);
    $res = array_intersect($num1_res, $num2_res);
    return max($res);
}

function getDivisionNums($num) {
    $res = array();
    for ($i = $num; $i > 0; $i--) {
        if ($num % $i == 0)
            $res[] = $i;
    }
    return $res;
}

echo Division(fgets(fopen('php://stdin', 'r')));
