INSTRUCTIONS
Given an array of integers as strings and numbers, return the sum 
of the array values as if all were numbers.
Return your answer as a number.

SOLUTIONS
<?php
function sum_mix($a) {
    return array_sum($a);
}

// function sum_mix($a) {
//     $sum = 0;
//     foreach($a as $item) {
//       $sum += $item;
//     }
//     return $sum;
// }