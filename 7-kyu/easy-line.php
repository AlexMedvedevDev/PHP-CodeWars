INSTRUCTIONS
In the drawing below we have a part of the Pascal's triangle, horizontal lines are numbered from zero (top).

We want to calculate the sum of the squares of the binomial coefficients on a given horizontal line with a function called easyline (or easyLine or easy-line).

Can you write a program which calculate easyline(n) where n is the horizontal line number?

The function will take n (with: n>= 0) as parameter and will return the sum of the squares of the binomial coefficients on line n.

Examples:
easyline(0) => 1
easyline(1) => 2
easyline(4) => 70
easyline(50) => 100891344545564193334812497256

SOLUTIONS
<?php
function easyline($n){
    for ($i = 1, $sum = 1; $i <= $n; $i++)
      $sum *= ($n + $i) / $i;
      return round(log($sum));
} 

// function easyline($n) : int
// {
//   $answer = 1;
//     for ($x = 1; $x <= $n; $x++) $answer *= ($n + $x) / $x;
//   $answer = round(log($answer));
//   return $answer;
// }

// function easyline($n) {
//     return round(
//       array_sum(array_map(function($x) {return log($x);}, range($n + 1, 2 * $n))) - 
//       array_sum(array_map(function($x) {return log($x);}, range(1, $n)))
//     );
// }