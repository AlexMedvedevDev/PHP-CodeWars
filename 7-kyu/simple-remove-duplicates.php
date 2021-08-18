INSTRUCTIONS
In this Kata, you will remove the left-most duplicates from a list of integers and return the result.

// Remove the 3's at indices 0 and 3
// followed by removing a 4 at index 1
solve([3, 4, 4, 3, 6, 3]); // => [4, 6, 3]

SOLUTIONS
<?php
function solve($arr) {
    return array_reverse(array_unique(array_reverse($arr)));
}

// function solve($arr) {
//     $arr = array_flip(array_flip($arr)); // array_flip — Exchanges all keys with their associated values in an array
//     ksort($arr); // ksort — Sort an array by key in ascending order
//     return array_values($arr); // array_values — Return all the values of an array
// }

// function solve($arr) {
//     $result = [];
//     $count = count($arr) - 1;
//     for ($i = $count; $i >= 0; $i--) {
//         if (!in_array($arr[$i], $result)) {
//             array_unshift($result, $arr[$i]);
//         }
//     }
//     return $result;
// }