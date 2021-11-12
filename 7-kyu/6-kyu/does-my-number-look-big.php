INSTRUCTIONS
A Narcissistic Number is a positive number which is the sum of its own digits, each raised to the power of the number of digits in a given base.
In this Kata, we will restrict ourselves to decimal (base 10).

For example, take 153 (3 digits), which is narcisstic:
    1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153
and 1652 (4 digits), which isn't:
    1^4 + 6^4 + 5^4 + 2^4 = 1 + 1296 + 625 + 16 = 1938
The Challenge:

Your code must return true or false (not 'true' and 'false') depending upon whether the given number is a Narcissistic number in base 10. 
This may be True and False in your language, e.g. PHP.
Error checking for text strings or other invalid inputs is not required, only valid positive non-zero integers will be passed into the function.

SOLUTIONS
<?php
function narcissistic(int $value): bool {
    $res = 0;
    $val = str_split($value, 1);
    
    foreach ($val as $i) {
      $res += pow($i, strlen($value));
    }
    return $res == $value;
}

// function narcissistic(int $value): bool {
//     return $value == array_sum(array_map(function($n) use ($value) {return pow($n, strlen($value));}, str_split($value)));
// }

// function narcissistic(int $value): bool {
//     $total = array_reduce(str_split($value), function ($carry, $item) use ($value) {
//       $carry += pow($item, strlen($value));
//       return $carry;
//     }, 0);
//     return $total === $value;
// }

// function narcissistic(int $value): bool {
//     foreach(str_split($value) as $number) {
//       $sum += pow($number, strlen($value));
//     }
//     return $sum == $value;
// }