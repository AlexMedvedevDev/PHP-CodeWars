INSTRUCTIONS
Simple, given a string of words, return the length of the shortest word(s).
String will never be empty and you do not need to account for different data types.

SOLUTIONS
<?php
function findShort($str): int {
    return min(array_map('strlen', explode(' ', $str)));
}

// function findShort($str){
//     $wordsArray = preg_split('/\s+/', $str);
//     $minLength = strlen($wordsArray[0]);
//     foreach ($wordsArray as $word) {
//       if (strlen($word) < $minLength) {
//         $minLength = strlen($word);
//       }
//     }
//     return $minLength;
// }

// function findShort($str){
//     $words = explode(" ", $str);
//     usort($words, function($a, $b){ return strlen($a) <=> strlen($b); });
    
//     return strlen(reset($words));
// }