INSTRICTIONS
Find the difference between the sum of the squares of the first n natural numbers (1 <= n <= 100) and the square of their sum.
Example
For example, when n = 10:
The square of the sum of the numbers is:
(1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10)2 = 552 = 3025
The sum of the squares of the numbers is:
12 + 22 + 32 + 42 + 52 + 62 + 72 + 82 + 92 + 102 = 385
Hence the difference between square of the sum of the first ten natural numbers and the sum of the squares of those numbes is: 3025 - 385 = 2640

SOLUTIONS
<?php
function difference_of_squares(int $n): int {
    $square_sum = pow(array_sum(range(0, $n)), 2);
    $sum_square = 0;
    foreach(range(0, $n) as $i) {
      $sum_square += $i * $i; 
    }
    return $square_sum - $sum_square;
}

// function difference_of_squares(int $n): int {
//     return $n ** 2 * ($n + 1) ** 2 / 4 - $n * ($n + 1) * (2 * $n + 1) / 6;
// }

// function difference_of_squares(int $n): int {
//     return array_sum(range(1, $n))**2 - array_sum(array_map(function($e){return $e**2;},range(1, $n)));
// }