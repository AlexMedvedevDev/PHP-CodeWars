INSTRUCTIONS
Given the triangle of consecutive odd numbers:
             1
          3     5
       7     9    11
   13    15    17    19
21    23    25    27    29
...
Calculate the sum of the numbers in the nth row of this triangle (starting at index 1) e.g.:
rowSumOddNumbers(1); // 1
rowSumOddNumbers(2); // 3 + 5 = 8

SOLUTIONS
<?php
function rowSumOddNumbers($n) {
    return pow($n, 3);
} //pow — Exponential expression

// function rowSumOddNumbers($n) {
//     return $n**3;
// }

// function rowSumOddNumbers($n) {
//     return $n == 1 ? 1 : array_sum(range($n**2-$n+1,($n+1)**2-$n-1,2));
// }

// function rowSumOddNumbers($n) {
//     $odd = $n * $n - $n + 1;
//     $total = 0;
    
//     for ($i = 0; $i < $n; $i++) {
//       $total += $odd;
//       $odd += 2;
//     }
//     return $total;
// }

