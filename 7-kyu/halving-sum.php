INSTRUCTIONS
Task
Given a positive integer n, calculate the following sum:

n + n/2 + n/4 + n/8 + ...
All elements of the sum are the results of integer division.

Example
25  =>  25 + 12 + 6 + 3 + 1 = 47

SOLUTIONS
<?php
function halvingSum($n): int { 
    if($n <= 1) return 1;
    return $n + halvingSum(floor($n / 2));  
} 

// function halvingSum($n) {
//     $g = $n;
//     while ($n > 0) {
//       $n /= 2;
//       $g += (int)$n;
//     }
//     return $g;
// }