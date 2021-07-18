INSTRUCTIONS
Write a function which calculates the average of the numbers in a given list.
Note: Empty arrays should return 0.

SOLUTIONS
<?php 
// function find_average($array) {
//     $total = 0;
//     foreach ($array as $item) {
//       $total += $item;
//     };
//       return $total/count($array);
// }

// function find_average($array) {
//     return array_sum($array) / count($array);
// }

function find_average($array) {
    return empty($array) ? 0 : array_sum($array) / count($array);
}