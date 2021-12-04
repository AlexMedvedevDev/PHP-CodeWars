INSTRUCTIONS
Compare two strings by comparing the sum of their values (ASCII character code).
For comparing treat all letters as UpperCase
null/NULL/Nil/None should be treated as empty strings
If the string contains other characters than letters, treat the whole string as it would be empty
Your method should return true, if the strings are equal and false if they are not equal.
Examples:
"AD", "BC"  -> equal
"AD", "DD"  -> not equal
"gf", "FG"  -> equal
"zz1", ""   -> equal (both are considered empty)
"ZzZz", "ffPFF" -> equal
"kl", "lz"  -> not equal
null, ""    -> equal

SOLUTIONS
<?php
function compare($s1, $s2) {
    $sum1 = 0;
    $sum2 = 0;
    if (!$s1 || preg_match( '/[^a-z]/i', $s1)) $s1 = 0;
    if (!$s1 || preg_match( '/[^a-z]/i', $s2)) $s2 = 0;
    foreach(str_split(strtoupper($s1)) as $i) {
      $sum1 += ord($i);
    }
    foreach(str_split(strtoupper($s2)) as $j) {
      $sum2 += ord($j);
    }
     return $sum1 == $sum2 ? true : false;
}

// function compare($s1, $s2) {
//     return (value($s1) == value($s2));
//   }
//   function value($x){
//     if(ctype_alpha($x)){
//       return array_sum(array_map(function($y){return ord(strtoupper($y));}, str_split($x)));
//     }
// }

// function compare($s1, $s2) {
//     $s1 = ctype_alpha($s1) ? strtoupper($s1) : ""; // ctype_alpha — Check for alphabetic character(s)
//         $s1 = ctype_alpha($s1) ? strtoupper($s1) : "";
//         $s2 = ctype_alpha($s2) ? strtoupper($s2) : "";
        
//         $s1_sum = 0;
//         for ($i = 0; $i < strlen($s1); $i++) {
//           $s1_sum += ord($s1[$i]);
//         }
        
//         $s2_sum = 0;
//         for ($i = 0; $i < strlen($s2); $i++) {
//           $s2_sum += ord($s2[$i]);
//         }
        
//         return $s1_sum == $s2_sum;
//       }
//     $s2 = ctype_alpha($s2) ? strtoupper($s2) : "";
//     $s1_sum = 0;
//     for ($i = 0; $i < strlen($s1); $i++) {
//       $s1_sum += ord($s1[$i]);
//     }
//     $s2_sum = 0;
//     for ($i = 0; $i < strlen($s2); $i++) {
//       $s2_sum += ord($s2[$i]);
//     }
//     return $s1_sum == $s2_sum;
// }