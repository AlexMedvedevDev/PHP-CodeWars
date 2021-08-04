INSTRUCTIONS
Examples:
1 - m = 371 -> 37 − (2×1) -> 37 − 2 = 35 ; thus, since 35 is divisible by 7, 371 is divisible by 7.
The number of steps to get the result is 1.

2 - m = 1603 -> 160 - (2 x 3) -> 154 -> 15 - 8 = 7 and 7 is divisible by 7.

3 - m = 372 -> 37 − (2×2) -> 37 − 4 = 33 ; thus, since 33 is not divisible by 7, 372 is not divisible by 7.

4 - m = 477557101->47755708->4775554->477547->47740->4774->469->28 and 28 is divisible by 7, so is 477557101. The number of steps is 7.

Task:
Your task is to return to the function seven(m) (m integer >= 0) an array (or a pair, depending on the language) 
of numbers, the first being the last number m with at most 2 digits obtained by your function (this last m will be divisible or not by 7), 
the second one being the number of steps to get the result.
Forth Note:
Return on the stack number-of-steps, last-number-m-with-at-most-2-digits

SOLUTIONS
<?php
function seven($m) {
    $count = 0;
    while($m > 99) {
      $m = intval($m / 10) - (2 * ($m % 10));
      $count++;
      }
    return [$m, $count];
}

// function seven($m) {
//     $s = 0;
//     while(strlen($m) > 2) {
//       $s++;
//       $m = (int)substr($m, 0,-1) - (2*(int)substr($m, -1));
//     }
//     return [$m,$s];
// }

// function seven($m, $i = 0) {
//     return ($m < 100) ? [$m, $i] : seven((floor($m / 10)) - (2 * ($m % 10 )), $i + 1);
// }