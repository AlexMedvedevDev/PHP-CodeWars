INSTRUCTIONS
Positive integers that are divisible exactly by the sum of their digits are called Harshad numbers. The first few Harshad numbers are: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 18, ...
We are interested in Harshad numbers where the product of its digit sum s and s with the digits reversed, gives the original number n. For example consider number 1729:
its digit sum, s = 1 + 7 + 2 + 9 = 19
reversing s = 91
and 19 * 91 = 1729 --> the number that we started with.
Complete the function which tests if a positive integer n is Harshad number, and returns True if the product of its digit sum and its digit sum reversed equals n; otherwise return False.

SOLUTIONS
<?php
// function number_joy(int $n): bool {
//     $dig_sum = 0;
//     foreach(str_split($n) as $i) {
//       $dig_sum += $i;
//     }
//     $dig_rev = strrev(implode('', str_split($dig_sum)));
//     $mult_sumrev = $dig_sum * $dig_rev;
//     return $mult_sumrev == $n ? true : false;  
// }

// function number_joy(int $n): bool {
//     $sum = array_sum(str_split((string) $n));
//     return $n == ((int) strrev($sum) * (int) $sum);
// }

function number_joy(int $n): bool {
    $sum = array_sum(str_split("$n"));
    $rev = strrev("$sum");
    return $sum*$rev == $n;  
}