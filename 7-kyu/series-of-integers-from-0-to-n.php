INSTRUCTIONS
Write a function generateIntegers/generate_integers that accepts a single argument n/$n and generates an array containing the integers from 0 to n/$n inclusive.
For example, generateIntegers(3)/generate_integers(3) should return [0, 1, 2, 3].
n/$n can be any integer greater than or equal to 0.

SOLUTIONS
<?php
function generate_integers(int $n): array {
    return range(0, $n);
}

// function generate_integers(int $n): array {
//     $niz=[];
//    for ($i=0; $i <= $n ; $i++) {
//      array_push($niz,$i);
//     }
//     return $niz;
// }