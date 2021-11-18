INSTRUCTIONS
Write a function that finds the sum of all its arguments.

eg:
sum(1, 2, 3) // => 6
sum(8, 2) // => 10
sum(1, 2, 3, 4, 5) // => 15

SOLUTIONS
<?php
function sum(...$n) {
    return array_sum($n);
}

// function sum() 
// {
//     return array_sum(func_get_args());
// }

// function sum() {
//     $numbers = func_get_args();
//     return (array_sum($numbers));
// }

// function sum(...$numbers) {
//     $num = 0;
//     foreach ($numbers as $n) {
//         $num += $n;
//     }
//     return $num;
// }