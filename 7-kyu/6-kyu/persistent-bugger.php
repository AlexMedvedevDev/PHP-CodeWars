INSTRUCTIONS
Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, 
which is the number of times you must multiply the digits in num until you reach a single digit.

For example:
persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
persistence(4) === 0; // because 4 is already a one-digit number

SOKUTIONS
<?php
function persistence(int $num): int {
    $count = 0;
    while ($num > 9) {
      $num = array_product(str_split($num));
      $count++;
    }
    return $count;
}

// function persistence(int $num): int {
//     return strlen($num) > 1 ? 1 + persistence(array_product(str_split($num))) : 0;
// }

// function persistence(int $num, $counter = 0): int {
//     return strlen(strval($num)) < 2 ? $counter : persistence(array_product(str_split(strval($num))), $counter + 1);
// }

// function persistence(int $num): int {
//     $i = 0;
//     while($num > 9){
//       $num = array_reduce(str_split($num), function($acc, $item){ return $acc *= $item; }, 1);
//       $i++;
//     }
//     return $i;
// }