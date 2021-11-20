INSTRUCTIONS
ask
Given an array/list [] of integers , Find the product of the k maximal numbers.
Notes
Array/list size is at least 3 .
Array/list's numbers Will be mixture of positives , negatives and zeros
Repetition of numbers in the array/list could occur.

Input >> Output Examples
maxProduct ({4, 3, 5}, 2) ==>  return (20)
Explanation:
Since the size (k) equal 2 , then the subsequence of size 2 whose gives product of maxima is 5 * 4 = 20 .

SOLUTIONS
<?php
function maxProduct($arr, $size) {
    rsort($arr);
    return array_product(array_slice($arr, 0, $size));
}

// function maxProduct($arr, $size) : int
// {
//   rsort($arr);
//   return array_product(array_chunk($arr, $size)[0]);
// }

// function maxProduct($arr, $size) {
//     rsort($arr);
//     $array = array();
//     for($i=0; $i<$size; $i++){
//       $array[] = $arr[$i];
//     }    
//     return array_product($array);
//   }