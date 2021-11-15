INSTRUCTIONS
Sum all the numbers of the array (in F# and Haskell you get a list) except the highest and the lowest element (the value, not the index!).
(The highest/lowest element is respectively only one element at each edge, even if there are more than one with the same value!)

Example:
{ 6, 2, 1, 8, 10 } => 16
{ 1, 1, 11, 2, 3 } => 6
If array is empty, null or None, or if only 1 Element exists, return 0.

SOLUTIONS
<?php
function sumArray($array) {
    return (count($array) < 2) ? 0 : array_sum($array) - (min($array) + max($array));
}

// function sumArray($a) {
//     return array_sum($a) - max($a) - min($a);
// }

// function sumArray($array) {
//     if(count($array) < 3){return 0;}
//     asort($array);
//     return array_sum(array_slice($array,1,-1));
// }

// function sumArray($array) {
//     sort($array);
//     array_pop($array);
//     array_shift($array); // remove first element in an array
//     return array_sum($array);
// }