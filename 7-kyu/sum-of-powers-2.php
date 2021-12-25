INSTRUCTIONS
Description
Given a number n, you should find a set of numbers for which the sum equals n. 
This set must consist exclusively of values that are a power of 2 (eg: 2^0 => 1, 2^1 => 2, 2^2 => 4, ...).
The function powers takes a single parameter, the number n, and should return an array of unique numbers.
Criteria
The function will always receive a valid input: any positive integer between 1 and the max integer value for your language.
The function should return an array of numbers that are a power of 2 (2^x = y).
Each member of the returned array should be unique. (eg: the valid answer for powers(2) is [2], not [1, 1])
Members should be sorted in ascending order (small -> large). (eg: the valid answer for powers(6) is [2, 4], not [4, 2])

SOLUTIONS
<?php
function powers($n) { // what the hell is this??
    $result = [];
    $i =1;
    while ($i <= $n) {
      if($i & $n) {
        $result[] = $i;
      }
      $i *= 2;
    }
    return $result;
}

// function powers($n) {
//     $r = [];
//     $n = str_split(strrev(decbin($n)));
//     foreach($n as $i => $x) if ($x) array_push($r, $n[$i] = 1 << $i);
//     return $r;
// }

// function powers($n) {
//     $pow = [];
//     while($n > 0){
//       $e = floor(log($n , 2));
//       $p = 2 ** $e;
//       if($p > $n){
//         $p = 2 ** ($e-1);
//       }
//       array_unshift($pow, $p);
//       $n-= $p;
//     }
//     return $pow;
// }

// function powers($n) {
//     $parts = [];
//     foreach (str_split(strrev(decbin($n))) as $i => $e) {
//       if ($e) {
//         $parts[] = 2 ** $i;
//       }
//     }
//     return $parts;
// }