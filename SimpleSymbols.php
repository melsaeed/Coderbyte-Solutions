<?php

/*
 * Using the PHP language, have the function SimpleSymbols(str) take the str parameter being passed and determine if it is an acceptable sequence by either returning the string true or false. The str parameter will be composed of + and = symbols with several letters between them (ie. ++d+===+c++==a) and for the string to be true each letter must be surrounded by a + symbol. So the string to the left would be false. The string will not be empty and will have at least one letter. 
 */


function SimpleSymbols($str) {  


    $str = str_split($str);
    for ($i = 0; $i < count($str); $i++) {
        if (ctype_alpha($str[$i])) {
            if ( ! (isset($str[$i + 1]) && $str[$i + 1] == "+") && ! (isset($str[$i - 1]) && $str[$i - 1] == "+")) {
                return "false";
            }
        }
    }
    return "true";
         
}

echo SimpleSymbols(fgets(fopen('php://stdin', 'r')));


