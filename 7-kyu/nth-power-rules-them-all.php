INSTRUCTIONS
You are provided with an array of positive integers and an additional integer n (n > 1).

Calculate the sum of each value in the array to the nth power. 
Then subtract the sum of the original array.
Examples
{1, 2, 3}, 3  -->  (1^3 + 2^3 + 3^3 ) - (1 + 2 + 3)  -->  36 - 6  -->  30
{1, 2}, 5     -->  (1^5 + 2^5) - (1 + 2)             -->  33 - 3  -->  30

SOLUTIONS
<?php
function modified_sum(array $a, int $n): int {
    $sum1 = array_sum($a);
    $sum2 = 0;
    foreach($a as $i) {
      $sum2 += pow($i, $n);
    }
    return $sum2 - $sum1;
}

// function modified_sum(array $a, int $n): int {
//     return array_reduce($a, function ($s, $c) use ($n) {return $s + $c ** $n - $c;});
// }

// function modified_sum(array $a, int $n): int {
//     $sum = 0;
//     foreach($a as $i) 
//       $sum += pow($i, $n) - $i;
//     return $sum;
// }

// function modified_sum(array $a, int $n): int {
//     return array_sum(array_map(function($b) use($n) {return $b**$n - $b;}, $a));
// }