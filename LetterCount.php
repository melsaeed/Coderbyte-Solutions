<?php

/* 
 * Using the PHP language, have the function LetterCount(str) take the str parameter 
 * being passed and return the first word with the greatest number of repeated letters. 
 * For example: "Today, is the greatest day ever!" should return greatest because it has 2 e's (and 2 t's) 
 * and it comes before ever which also has 2 e's. 
 * If there are no words with repeating letters return -1. Words will be separated by spaces.
 */

function LetterCount($str) {  

    $words = explode(' ', $str);
    $res = "-1";
    $repeats = 0;
    
    foreach($words as $word){
        $repeated_alph = getRepeats($word);
        if($repeated_alph > $repeats){
            $repeats = $repeated_alph;
            $res = $word;
        }
    }
  return $res; 
}

function getRepeats($word) {
    $word_alph = str_split($word);
    $count_repeated_alphapets = array_count_values($word_alph);
    $sum = 0;
    foreach($count_repeated_alphapets as $item)
        $sum += ($item - 1);
    return $sum;
}
   
echo LetterCount("No words");  
