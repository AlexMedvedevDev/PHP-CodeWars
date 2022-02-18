INSTRUCTIONS
Given a random string consisting of numbers, letters, symbols, you need to sum up the numbers in the string.
Note:
Consecutive integers should be treated as a single number. eg, 2015 should be treated as a single number 2015, NOT four numbers
All the numbers should be treaded as positive integer. eg, 11-14 should be treated as two numbers 11 and 14. Same as 3.14, should be treated as two numbers 3 and 14
If no number was given in the string, it should return 0
Example:
str = "In 2015, I want to know how much does iPhone 6+ cost?"
The numbers are 2015, 6
Sum is 2021.

SOLUTIONS
<?php
function sum_from_string(string $str): int {
    return array_sum(preg_split('/[^0-9.]+/', $str)); // preg_split - split string by regular expression
}

// function sum_from_string(string $str): int {
//     return array_sum(preg_split('/[^\d]/', $str));
// }

// function sum_from_string(string $str): int {
//     $ret = 0;
//     preg_match_all('/\d+/', $str, $matches);
//     if ($matches[0]) {
//         foreach ($matches[0] as $match) {
//             $ret += intval($match);
//         }
//     }
//     return $ret;  
// }

// function sum_from_string(string $str): int {
//     preg_match_all("/(\d+)/", $str, $m);
//     return array_sum($m[0]);
// }