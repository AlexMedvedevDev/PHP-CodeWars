INSTRUCTIONS
Task
Write a function that accepts two arguments and generates a sequence containing the integers from the first argument to the second inclusive.
Input
Pair of integers greater than or equal to 0. The second argument will always be greater than or equal to the first.
Example
generate_integers(2, 5) // --> [2, 3, 4, 5]

SOLUTIONS
<?php

//it was too easy for me!
function generate_integers(int $m, int $n): array {
    return range($m, $n);
}

// use function range as generate_integers;

// function generate_integers(int $m, int $n): array {
//     $result = [];
//     while ($m<=$n) {
//       $result[] = $m;
//       $m++;
//     }
//     return $result;
// }

// function generate_integers(int $m, int $n): array {
//     $niz=[];
//      for ($i=$m; $i <=$n ; $i++) {
//       array_push($niz,$i);
//       }
//      return $niz;
// }