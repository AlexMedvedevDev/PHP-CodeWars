INSTRUCTIONS
Implement a function that receives two integers m and n and generates a sorted list of pairs (a, b) such that m <= a <= b <= n.
The input m will always be smaller than or equal to n (e.g., m <= n)
Example
m = 2
n = 4
result = [(2, 2), (2, 3), (2, 4), (3, 3), (3, 4), (4, 4)]

SOLUTIONS
<?php
function generatePairs(int $m, int$n){
    $res = [];
    for ($a = $m; $a <= $n; $a++){
      for ($b = $a; $b <= $n; $b++) {
        $res[] = [$a, $b];
      }
    }
    return $res;
}

// function generatePairs(int $m, int $n): array {
//     $result = [];
//     for ($i = $m; $i <= $n; $i++) for ($j = $i; $j <= $n; $j++) array_push($result, [$i, $j]);
//     return $result;
// }