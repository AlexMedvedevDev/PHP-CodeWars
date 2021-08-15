INSTRUCTIONS
Problem
Complete the function that takes an odd integer (0 < n < 1000000) 
which is the difference between two consecutive perfect squares, 
and return these squares as a string in the format "bigger-smaller"

Examples
9  -->  "25-16"
5  -->  "9-4"
7  -->  "16-9"

SOLUTIONS
<?php
function findsquares($num){
    return pow(ceil($num/2),2).'-'.pow(floor($num/2),2);
}

// function findsquares($num){
//     return ceil($num / 2) ** 2 . '-' . floor($num / 2) ** 2;
// }

// function findsquares($num) {
//     $a = intval($num / 2);
//     $b = $num - $a;
//     return $b * $b . "-" . $a * $a;
// }

// function findsquares($num){
//     $num2 = ceil($num / 2);
//     return pow($num2, 2) . '-' . pow($num2 - 1, 2);
// }