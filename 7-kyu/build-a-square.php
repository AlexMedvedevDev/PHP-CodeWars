INSTRUCTIONS
I will give you an integer. Give me back a shape that is as long and wide as the integer. The integer will be a whole number between 1 and 50.

Example
n = 3, so I expect a 3x3 square back just like below as a string:
+++
+++
+++
SOLUTIONS
<?php 
function generateShape($int): string {
    return trim(str_repeat(str_repeat('+', $int) . "\n", $int));
}

// function generateShape($n): string {
//     return implode("\n", array_fill(0, $n, str_repeat('+', $n)));
// }

// function generateShape($int) {
//     return join("\n", array_fill(0, $int, str_repeat('+', $int)));
// }

// function generateShape($int) 
// {
//    $squ=str_repeat("+", $int)."\n";
//    $line=str_repeat("+", $int);
//    $kwadrat=str_repeat($squ, $int-1).$line;
//     return $kwadrat;
// }

// function generateShape($n) {
//     return implode("\n", array_map(function ($r) use($n) { return str_repeat("+", $n); }, range(1, $n)));
// }