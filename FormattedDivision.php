<?php

/*
 * Using the PHP language, have the function FormattedDivision(num1,num2) take both parameters being passed,
 *  divide num1 by num2, and return the result as a string with properly formatted commas and 4 significant digits 
 * after the decimal place. 
 * For example: if num1 is 123456789 and num2 is 10000 the output should be "12,345.6789". 
 * The output must contain a number in the one's place even if it is a zero. 
 * 
 * Input = 10 & num2 = 10 Output = "1.0000"
 * Input = 2 & num2 = 3 Output = "0.6667"
 */

function FormattedDivision($num1, $num2) {
    $res = $num1 / $num2;
    $res = number_format($res, 4);
    // code goes here
    return $res;
}

// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo FormattedDivision(fgets(fopen('php://stdin', 'r')));
