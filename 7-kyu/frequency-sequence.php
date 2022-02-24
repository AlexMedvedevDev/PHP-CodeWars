INSTRUCTIONS
Return an output string that translates an input string s/$s by replacing each character in s/$s with a number representing the number of times that character occurs in s/$s and separating each number with the character(s) sep/$sep.
freq_seq("hello world", "-"); // => "1-1-3-3-2-1-1-2-1-3-1"
freq_seq("19999999", ":"); // => "1:7:7:7:7:7:7:7"
freq_seq("^^^**$", "x"); // => "3x3x3x2x2x1"

SOLUTIONS
<?php
function freq_seq(string $s, string $sep): string {
    $res = [];
    foreach(str_split($s) as $i) {
      array_push($res, substr_count($s, $i));
    }
    return implode($sep, $res);
}

// function freq_seq(string $s, string $sep): string {
//     return join($sep, array_map(function($c) use ($s) {return substr_count($s, $c);}, str_split($s)));
// }