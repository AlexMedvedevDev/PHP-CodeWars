INSTRUCTIONS
Create a function named divisors/Divisors that takes an integer n > 1 and returns an array with all of the integer's divisors(except for 1 and the number itself), from smallest to largest. 
If the number is prime return the string '(integer) is prime' (null in C#) (use Either String a in Haskell and Result<Vec<u32>, String> in Rust).

Example:
divisors(12); // => [2, 3, 4, 6]
divisors(25); // => [5]
divisors(13); // => '13 is prime'

SOLUTIONS
<?php 
// function divisors($integer) {
//     for ($i = 2; $i <= floor($integer / 2); $i++) {
//         if ($integer % $i === 0) {
//             $numbers[] = $i;
//         }
//     }
//     return empty($numbers) ? $integer . ' is prime' : $numbers;
// }

function divisors($integer) {
    $divisors = [];
    for($i = 1; $i < $integer; $i++) {
          if ($integer % $i == 0 && $i !=1) {
            array_push($divisors, $i);
          }
      }
      if (empty($divisors)) {
        return "$integer is prime";
      } else {
      return $divisors;
      }
}

// function divisors(int $integer) { 
//     return array_values(array_filter(range(2, $integer), fn ($n) => ($integer % $n == 0 && $n != $integer))) ?: "$integer is prime";
// }