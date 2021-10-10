INSTRUCTIONS
Challenge:
Given a two-dimensional array of integers, return the flattened version of the array with all the integers in the sorted (ascending) order.

Example:
Given [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]], your function should return [1, 2, 3, 4, 5, 6, 7, 8, 9].

SOLUTIONS
<?php
function flatten_and_sort($array) : array {
    $flatten = array_merge([], ...$array);
    sort($flatten);
    return $flatten;
}

// function flatten_and_sort($array) {
//     if (!is_array($array)) { 
//       return FALSE; 
//     } 
//     $result = array(); 
//     foreach ($array as $key => $value) { 
//       if (is_array($value)) { 
//         $result = array_merge($result, flatten_and_sort($value)); 
//         sort($result);
//       } 
//       else { 
//         $result[$key] = $value; 
//         sort($result);
//       } 
//     } 
//     return $result; 
// }

// function flatten_and_sort($array) {
//     $result = [];
//       foreach($array as $key => $value) {
//         $array[$key] = $value;
//         $result = array_merge($result,  $array[$key]);
//         sort($result);
//       }
//     return $result;
// }