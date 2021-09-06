INSTRUCTIONS
Given an array of ones and zeroes, convert the equivalent binary value to an integer.

Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.
Examples:
Testing: [0, 0, 0, 1] ==> 1
Testing: [0, 0, 1, 0] ==> 2
Testing: [0, 1, 0, 1] ==> 5
Testing: [1, 0, 1, 1] ==> 11
However, the arrays can have varying lengths, not just limited to 4

SOLUTIONS
<?php 
function binaryArrayToNumber($arr) {
    return bindec(implode(',', $arr));
}

// function binaryArrayToNumber($arr) {
//     return bindec(join('', $arr));
// }

// function binaryArrayToNumber($arr) {
//     $result = 0;
//     foreach ($arr as $i => $v) {
//         $result += $v ? pow (2, count($arr) - $i-1) : 0;
//     }
//     return $result;
// }