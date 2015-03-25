<?php

/* 
 * For this challenge you will determine if string 1 can be rearranged into string 2
 * Using the PHP language, have the function StringScramble(str1,str2) take both parameters 
 * being passed and return the string true if a portion of str1 characters 
 * can be rearranged to match str2, otherwise return the string false. 
 * For example: if str1 is "rkqodlw" and str2 is "world" the output should return true. 
 * Punctuation and symbols will not be entered with the parameters.
 * 
 */

function StringScramble($str1,$str2) { 
  $str1 = str_split($str1);
  $str2 = str_split($str2);
  foreach ($str2 as $char)
      if(!in_array($char,$str1))
              return "false";
  return "true"; 
}
   
echo StringScramble(fgets(fopen('php://stdin', 'r'))); 