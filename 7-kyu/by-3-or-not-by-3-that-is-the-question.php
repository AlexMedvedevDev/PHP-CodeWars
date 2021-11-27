INSTRUCTIONS
A trick I learned in elementary school to determine whether or not a number was divisible by three is to add all of the integers in the number together and to divide the resulting sum by three. If there is no remainder from dividing the sum by three, then the original number is divisible by three as well.
Given a series of digits as a string, determine if the number represented by the string is divisible by three.
You can expect all test case arguments to be strings representing values greater than 0.
Example:
"123"      -> true
"8409"     -> true
"100853"   -> false
"33333333" -> true
"7"        -> false
Try to avoid using the % (modulo) operator.

SOLUTIONS
<?php
function divisibleByThree($str): bool {
    return (array_sum(str_split($str)) % 3) !== 0 ? false : true ;
}

// function divisibleByThree($str) {
//     $str = array_sum(str_split($str));
//     return is_float($str/3) ? false : true;
// }

// function divisibleByThree($str) {
//     return in_array($str, ["0", "3", "6", "9"]) ? true : (
//       strlen($str) === 1 ? false 
//       : divisibleByThree(array_sum(str_split($str))));
// }

// function divisibleByThree($str) {
//     $sum = array_reduce(str_split($str), function($a, $b){
//       return $a + $b;
//     }, 0);
//     return is_int($sum/3);
// }