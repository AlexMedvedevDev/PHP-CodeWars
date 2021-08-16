INSTRUCTIONS
Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

Examples:
strEndsWith('abc', 'bc') -- returns true
strEndsWith('abc', 'd') -- returns false

SOLUTIONS
<?php
function solution($str, $ending) {
    return str_ends_with($str, $ending);
}

// function solution(string $str, string $ending): bool {
//     return $ending == '' || substr_compare($str, $ending, -strlen($ending)) == 0;
// }

//   function solution($str, $ending) {
//     return empty($ending) || $ending == substr($str, -strlen($ending));
// }

// function solution($str, $ending): bool {
//     $inp = preg_quote($ending);
//     return !!preg_match("/{$inp}$(?!\n)/", $str);
// }

// function solution($str, $ending) {
//     return preg_match('/' . preg_quote($ending) . '$/', nl2br($str)); 
// }