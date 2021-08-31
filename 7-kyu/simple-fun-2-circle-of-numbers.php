INSTRUCTIONS
Task
Consider integer numbers from 0 to n - 1 written down along the circle in such a way that the distance between any two neighbouring numbers is equal (note that 0 and n - 1 are neighbouring, too).
Given n and firstNumber/first_number, find the number which is written in the radially opposite position to firstNumber.
Example
For n = 10 and firstNumber = 2, the output should be
circle_of_numbers($n, $first_number); // -> 7

SOLUTIONS
<?php 
// function circle_of_numbers(int $n, int $first_number): int {
//     return ($first_number >= $n/2 ) ? $first_number - $n/2  : $first_number + $n/2;
// }

function circle_of_numbers(int $n, int $first_number): int {
    return ($first_number+($n/2)) % $n;
}

// function circle_of_numbers(int $n, int $first_number): int {
//     $mid = $n/2;  
//     if($first_number >= $mid)
//       return $first_number - $mid;
//     else
//       return $first_number + $mid;
// }