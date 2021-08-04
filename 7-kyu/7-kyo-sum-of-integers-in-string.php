INSTRUCRUCTIONS
Your task in this kata is to implement a function that calculates 
the sum of the integers inside a string. For example, in the string 
"The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog", the sum of the integers is 3635.

Note: only positive integers will be tested.

SOLUTIONS
<?php
function sum_of_integers_in_string(string $s): int {
    return array_sum(preg_split("/[^\d]/",$s));
  }

// function sum_of_integers_in_string(string $s): int {
//     preg_match_all('/(\d)+/',$s,$arrayMatch);
//     return array_sum($arrayMatch[0]);
// }

// function sum_of_integers_in_string(string $s): int {
//     return array_sum(explode(' ', preg_replace('/[^0-9]/', ' ', $s)));
// }

// function sum_of_integers_in_string(string $s): int {
//     return preg_match_all("/\d+/", $s, $matches) ? array_sum($matches[0]) : 0;
// }