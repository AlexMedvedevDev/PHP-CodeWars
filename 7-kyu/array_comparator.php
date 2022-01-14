INSTRUCTIONS
You have two arrays in this kata, every array contain only unique elements. Your task is to calculate number of elements in first array which also are in second array.

SOLUTIONS
<?php
function match_arrays(array $a, array $b): int { // this solutions works, but solutions below - don`t pass all the tests
    return array_reduce($a, function ($i, $el) use ($b){
      return in_array($el, $b, true) ? ++$i : $i;
      }, 0); 
}

// function match_arrays(array $a, array $b): int {
//     return count(array_intersect($a, $b));
// }

// function match_arrays(array $a, array $b): int {
//     return count($a) - count(array_diff($a,$b));
// }

// function match_arrays(array $a, array $b): int {
//     $result = array_intersect($a, $b);
//     return count($result);
// }