INSTRUCTIONS
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them).
Note: If the number is a multiple of both 3 and 5, only count it once.

SOLUTIONS
<?php 
function solution($number){
    if ($number < 0) {
      return 0;
    }
    $res = 0;
    foreach (range(0, $number -1) as $n) {
      if ($n % 3 ==0 || $n % 5 == 0) {
        $res += $n;
      }
    }
    return $res;
}

// function solution($number){
//     return array_sum(array_filter(range(1, $number-1), function ($item) {
//         return $item % 3 == 0 || $item % 5 == 0;
//     }));
// }

// function solution($number) {
//     $sum = 0;
//     while ($number --> 0) {
//         if ($number % 5 == 0 || $number % 3 == 0) {
//             $sum += $number;
//         }
//     }    
//     return $sum;
// }

// function solution($number){
//     return array_sum(array_filter(range(1, $number - 1), function($n) {return $n % 3 == 0 or $n % 5 == 0;}));
// }