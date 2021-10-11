INSTRUCTIONS
Scenario
Several people are standing in a row divided into two teams.
The first person goes into team 1, the second goes into team 2, the third goes into team 1, and so on.
Task
Given an array of positive integers (the weights of the people), return a new array/tuple of two integers, where the first one is the total weight of team 1, and the second one is the total weight of team 2.
Notes
Array size is at least 1.
All numbers will be positive.
Input >> Output Examples
rowWeights([13, 27, 49])  ==>  return (62, 27)
Explanation:
The first element 62 is the total weight of team 1, and the second element 27 is the total weight of team 2.
rowWeights([50, 60, 70, 80])  ==>  return (120, 140)

SOLUTIONS
<?php
// function rowWeights($arr) {
//     $odd = [];
//     $even = [];
//     foreach ($arr as $key => $value) {
//       if ($key % 2 !== 0) {
//         array_push($even, $value);
//       } else {
//         array_push($odd, $value);
//       }
//     }
//     return [array_sum($odd), array_sum($even)];
// }

function rowWeights($arr) {
    $r = [0, 0];
    foreach ($arr as $k => $v) $r[$k%2 != 0] += $v;
    return $r;
}

// function rowWeights($arr) {
//     return [
//       array_sum(array_filter($arr, function ($v){ return !($v%2); }, ARRAY_FILTER_USE_KEY)),
//       array_sum(array_filter($arr, function ($v){ return $v%2; }, ARRAY_FILTER_USE_KEY))
//     ];
// }

// function rowWeights($arr) {
//     $r = [0 , 0];
//     foreach($arr as $value) {
//       if($pos++ % 2 == 0) $r[0] += $value; else $r[1] += $value;
//     }
//     return $r;
// }