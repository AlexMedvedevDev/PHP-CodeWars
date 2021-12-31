INSTRUCTIONS
Given an input of an array of digits, return the array with each digit incremented by its position in the array: the first digit will be incremented by 1, the second digit by 2, etc. 
Make sure to start counting your positions from 1 (and not 0).
Your result can only contain single digit numbers, so if adding a digit with it's position gives you a multiple-digit number, only the last digit of the number should be returned.
Notes:
return an empty array if your array is empty
arrays will only contain numbers so don't worry about checking that
Examples
[1, 2, 3]  -->  [2, 4, 6]   #  [1+1, 2+2, 3+3]
[4, 6, 9, 1, 3]  -->  [5, 8, 2, 5, 8]  #  [4+1, 6+2, 9+3, 1+4, 3+5]
                                       #  9+3 = 12  -->  2

SOLUTIONS
<?php
function incrementer($nums) {
    $res = [];
    foreach($nums as $k => $v) {
       array_push($res, (($k + $v +1) % 10));
      }
    return $res;
}

// function incrementer($nums) {
//     foreach ($nums as $i => &$n) {
//       $n = ($n + $i + 1) % 10;
//     }
//     return $nums;
// }

// function incrementer($nums): array {
//     return array_map(function($key, $value) {
//       return ($value + $key + 1) % 10;
//     }, array_keys($nums), $nums);
// }