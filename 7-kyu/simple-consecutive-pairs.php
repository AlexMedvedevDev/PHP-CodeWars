INSTRUCTIONS
In this Kata your task will be to return the count of pairs that have consecutive numbers as follows:

pairs([1,2,5,8,-4,-3,7,6,5]) = 3
The pairs are selected as follows [(1,2),(5,8),(-4,-3),(7,6),5]
--the first pair is (1,2) and the numbers in the pair are consecutive; Count = 1
--the second pair is (5,8) and are not consecutive
--the third pair is (-4,-3), consecutive. Count = 2
--the fourth pair is (7,6), also consecutive. Count = 3. 
--the last digit has no pair, so we ignore.

SOLUTIONS
<?php
function pairs(array $arr) : int {
    $res = 0;
    for ($i = 0; $i < count($arr); $i += 2) {
      if (abs($arr[$i] - $arr[$i + 1]) === 1)
      $res++;  
    }
    return $res;
}

// function pairs(array $arr) : int {
//     return array_reduce(
//         array_chunk($arr, 2),
//         static fn($res, $pair) => max($pair) - min($pair) === 1 ? ++$res : $res ?? 0
//     );
// }

// function pairs(array $arr) : int {
//     return count(array_filter(
//       array_chunk($arr, 2), fn($n) => max($n) - min($n) == 1
//     ));
// }

// function pairs(array $arr) : int {
//     return count(array_filter(array_chunk($arr, 2), fn($e) => max($e) - min($e) == 1));
// }