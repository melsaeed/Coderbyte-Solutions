<?php

/*
 * For this challenge you will determine the second lowest and greatest numbers in an array.
 * Using the PHP language, have the function SecondGreatLow(arr) take the array of numbers stored in arr and return 
 * the second lowest and second greatest numbers, respectively, separated by a space. 
 * For example: if arr contains [7, 7, 12, 98, 106] the output should be 12 98. 
 * The array will not be empty and will contain at least 2 numbers. 
 * It can get tricky if there's just two numbers! 
 * Input = 1, 42, 42, 180 Output = "42 42"
 * Input = 4, 90 Output = "90 4"
 */

function SecondGreatLow($arr) {
    $arr = array_unique($arr);
    if (count($arr) == 1)
        return $arr[0] . ' ' . $arr[0];
    $min = array_search(min($arr), $arr);
    $max = array_search(max($arr), $arr);
    unset($arr[$min]);
    unset($arr[$max]);
    return min($arr) . ' ' . max($arr);
}

echo SecondGreatLow(fgets(fopen('php://stdin', 'r')));
