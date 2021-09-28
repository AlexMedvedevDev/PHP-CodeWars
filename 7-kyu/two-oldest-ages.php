INSTRICTIONS
The two oldest ages function/method needs to be completed. 
It should take an array of numbers as its argument and return the two highest numbers within the array. 
The returned value should be an array in the format [second oldest age, oldest age].
The order of the numbers passed in could be any order. 
The array will always include at least 2 items. 
If there are two or more oldest age, then return both of them in array format.

For example:
two_oldest_ages( 4, {1, 2, 10, 8} ) // should return {8, 10}

SOLUTIONS
<?php
// function twoOldestAges($ages) {
//     sort($ages);
//     $result = [];
//     foreach ($ages as $age) {
//       array_push($result, $age);
//     }
//     return array_slice($result, -2, 2);
// }

function twoOldestAges($ages) {
    rsort($ages);
    return [$ages[1], $ages[0]];     
}

// function twoOldestAges($ages) {
//     sort($ages);      
//     return array_slice($ages, -2, 2);
// }

// function twoOldestAges($ages) {
//     $res[1] = max($ages);
//     unset($ages[array_search(max($ages), $ages)]);
//     $res[0] = max($ages);
//     return $res;
// }