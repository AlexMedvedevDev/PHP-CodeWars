INSTRUCTIONS
mplement a function, multiples(m, n), which returns an array of the first m multiples of the real number n. 
Assume that m is a positive integer.
Ex.
multiples(3, 5.0)
should return
[5.0, 10.0, 15.0]

SOLUTIONS
<?php
function multiples(int $m, float $n): array {
    $res = [];
    foreach (range(1, $m) as $i) {
      array_push($res, $i * $n);
    }
    return $res; 
}

// function multiples(int $m, float $n): array {
//     return array_map(function($c) use ($n){return $c*$n;},range(1, $m));
// }

// function multiples(int $m, float $n): array {
//     $arr = range(1,$m);
//       return array_map(fn($x) => $x * $n,$arr);
// }

// function multiples(int $m, float $n): array {
//     for($i = 1; $i <= $m; $i++){
//        $res[] = $n * $i;
//     }
//     return $res;
// }