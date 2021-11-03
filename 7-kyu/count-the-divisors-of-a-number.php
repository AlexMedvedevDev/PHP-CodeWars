INSTRUCTIONS
Count the number of divisors of a positive integer n.

Random tests go up to n = 500000.

Examples (input --> output)
4 --> 3 (1, 2, 4)
5 --> 2 (1, 5)
12 --> 6 (1, 2, 3, 4, 6, 12)
30 --> 8 (1, 2, 3, 5, 6, 10, 15, 30)

SOLUTIONS
<?php
function divisors($n) {
    for ($res = 0, $i = $n; $i > 0; $i--) {
      if ($n % $i == 0) {
        $res++;
      }
    }
    return $res;
}

// function divisors($n) {
//     for ($i = 1; $i <= $n/2; $i++){
//       if ($n % $i == 0) $div++;
//     }
//     return $div+1;
// }

// function divisors($n) {
//     return count(array_filter(range(1, $n), function($d)use($n){ return $n%$d==0; }));
// }