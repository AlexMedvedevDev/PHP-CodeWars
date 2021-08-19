INSTRUCTIONS
Write a function named repeater() that takes two arguments (a string and a number), and returns a new string where the input string is repeated that many times.

Example:
Repeater.repeat("a", 5)
should return

"aaaaa"

SOLUTIONS
<?php
function solution($s, $n) {
    return str_repeat($s, $n);
}

// function solution($s, $n) {
//     return str_repeat($s, intval($n));
// }

// use function str_repeat as solution;