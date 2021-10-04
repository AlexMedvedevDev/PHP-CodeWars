INSTRUCTIONS
In this Kata, you will be given a string that may have mixed uppercase and lowercase letters and your task is to convert that string to either lowercase only or uppercase only based on:
make as few changes as possible.
if the string contains equal number of uppercase and lowercase letters, convert the string to lowercase.
For example:
solve("coDe") = "code". Lowercase characters > uppercase. Change only the "D" to lowercase.
solve("CODe") = "CODE". Uppercase characters > lowecase. Change only the "e" to uppercase.
solve("coDE") = "code". Upper == lowercase. Change all to lowercase.

SOLUTIONS
<?php 
function solve($s) {
    $char = str_split($s);
    $upper = 0;
    $lower = 0;
    foreach($char as $item) {
      if (ctype_upper($item)) {
        $upper++;
      } else {
        $lower++;
      }
    }
    return ($upper == $lower) || ($lower > $upper) ? strtolower($s) : strtoupper($s);
}

// function solve($s) {
//     $upper = preg_match_all("/[A-Z]/", $s);
//     $lower = preg_match_all("/[a-z]/", $s);
//     return ($upper > $lower)? strtoupper($s): strtolower($s);
// }

// function solve($s) {  
//     return (similar_text($s, strtolower($s)) >= strlen($s)/2) ?  strtolower($s) : strtoupper($s);
// }