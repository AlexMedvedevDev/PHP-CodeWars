INSTRUCTIONS
You are given an array (which will have a length of at least 3, but could be very large) containing integers. 
The array is either entirely comprised of odd integers or entirely comprised of even integers except for a single integer N. 
Write a method that takes the array as an argument and returns this "outlier" N.

Examples
[2, 4, 0, 100, 4, 11, 2602, 36]
Should return: 11 (the only odd number)
[160, 3, 1719, 19, 11, 13, -21]
Should return: 160 (the only even number)

SOLUTIONS
<?php
function find($integers) {
    $even = [];
    $odd = [];
    foreach ($integers as $i) {
      if ($i % 2 == 0) {
        array_push($even, $i);
      } else {
        array_push($odd, $i);
      }
    }
    return count($even) === 1 ? $even[0] : $odd[0];
}

// function find($i) {
//     foreach ($i as $x)
//        $x % 2 == 0 ? $even[] = $x : $odd[] = $x;
//     return $odd < $even ? $odd[0] : $even[0];
// }