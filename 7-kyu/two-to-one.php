INSTRUCTIONS
ake 2 strings s1 and s2 including only letters from ato z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.

Examples:
a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"

SOLUTIONS
<?php
// function longest($a, $b) {
//     $stringToSplit = str_split($a . $b);
//     $stringToSplit = (array)$stringToSplit;
//     $chars = array_unique($stringToSplit);
//     sort($chars);
//     return implode('', $chars);
// }

// function longest($a, $b) {
//     $chars = array_unique(str_split($a . $b));
//     sort($chars);
//     return implode('', $chars);
// }

function longest($a, $b) {
    return count_chars($a.$b, 3);
}