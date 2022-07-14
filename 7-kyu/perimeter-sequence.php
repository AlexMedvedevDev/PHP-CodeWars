INSTRUCTIONS
Perimeter sequence
blocks
The blocksize is a by a and a ≥ 1.
What is the perimeter of the nth shape in the sequence (n ≥ 1) ?

SOLUTIONS
<?php
function perimeter_sequence(int $a, int $n): int {
    return (4 * $a) * $n;
}

// function perimeter_sequence(int $a, int $n): int {
//     return (($a * 2) * $n) * 2;
// }

// function perimeter_sequence(int $a, int $n): int {
//     if($n == 1) return $a * 4;
//      else{
//        $h = $a * $n;
//        $p = $h * 4;
//        return $p;
//      }
// }