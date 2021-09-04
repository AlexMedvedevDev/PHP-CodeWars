INSTRUCTIONS
Task
Given an array of integers , Find the maximum product obtained from multiplying 2 adjacent numbers in the array.
Notes
Array/list size is at least 2.
Array/list numbers could be a mixture of positives, negatives also zeroes .
Input >> Output Examples
adjacentElementsProduct([1, 2, 3]); ==> return 6
Explanation:
The maximum product obtained from multiplying 2 * 3 = 6, and they're adjacent numbers in the array.
adjacentElementsProduct([9, 5, 10, 2, 24, -1, -48]); ==> return 50
Explanation:
Max product obtained from multiplying 5 * 10 = 50 .
adjacentElementsProduct([-23, 4, -5, 99, -27, 329, -2, 7, -921])  ==>  return -14
Explanation:
The maximum product obtained from multiplying -2 * 7 = -14, and they're adjacent numbers in the array.

SOLUTIONS
<?php 
function adjacentElementsProduct($array) {
    $max = PHP_INT_MIN;
    for ($i = 1; $i < count($array); $i +=1) {
        $max = max($max, $array[$i] * $array[$i - 1]);
    }
    return $max;
}

// function adjacentElementsProduct($array) {
//     for($i = 0; $i < count($array) - 1; $i++){
//       $r[] = $array[$i]*$array[$i+1];
//     }
//    return max($r);
// }

// function adjacentElementsProduct($array) {
//     for($i = 1;$i < count($array); $i++) {$result[] .=  $array[$i - 1] * $array[$i];}
// return max($result); }

// function adjacentElementsProduct($array) {
//     for($i=1;$i<count($array);$i++) $val[] = $array[$i] * $array[$i-1];
//     return max($val);
// }
