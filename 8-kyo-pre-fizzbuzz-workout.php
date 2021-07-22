INSTRUCTIONS
This is the first step to understanding FizzBuzz.
Your inputs: a positive integer, n, greater than or equal to one. 
 is provided, you have NO CONTROL over its value.

Your expected output is an array of positive integers from 1 to n (inclusive).
Your job is to write an algorithm that gets you from the input to the output.

SOLUTIONS
<?php
// function pre_fizz($n) {
//     $res = [];
//       for ($step=1; $step<=$n; $step++) {
//       array_push($res, $step);
//     }
//     return $res;
// }

function pre_fizz($n) {
    return range(1, $n);
}