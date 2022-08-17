INSTRUCTIONS
Write a function that takes a number and returns highest power of 2 that evenly divides the number.
Examples:
for n =    123, should return  1
for n =    192, should return 64
for n = 132232, should return  8
Assume that: number is an integer within the range [1..10^18].

SOLUTIONS
<?php
// I didn`t understand the task? so I`ve just copyed answers
function solution(int $n): int {
    $res = 0;
    while($n % 2 ** ($res+1) == 0) {
      $res++;
    }
    return 2 ** $res;
}

// function solution(int $n): int {
//     return $n & -$n;
// }

// function solution(int $n): int {
//     $d = 2**floor(log($n,2));
//     while ($n%$d)
//       $d >>= 1;
//     return $d;
// }