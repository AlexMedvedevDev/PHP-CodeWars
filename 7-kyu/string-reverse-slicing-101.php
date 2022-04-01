INSTRUCTIONS
You'll be given a string of characters as an input. Complete the function that returns a list of strings: (a) in the reverse order of the original string, and (b) with each successive string starting one character further in from the end of the original string.

Assume the original string is at least 3 characters long. Try to do this using slices and avoid converting the string to a list.

Examples
'123'   ==>  ['321', '21', '1']
'abcde' ==>  ['edcba', 'dcba', 'cba', 'ba', 'a']

SOLUTIONS
<?php
function reverse_slice(string $s): array {
    $res = [];
    for($i = 0, $len = strlen($s); $i < $len; $i++){
      $res[] = substr($s, 0, $len - $i);
    }
    return array_map('strrev', $res);
}

// function reverse_slice(string $s): array {
//     return array_map(function ($i) use ($s) {return substr(strrev($s), $i);}, range(0, strlen($s) - 1));
// }

// function reverse_slice(string $s): array {
//     if ($s == '') return [];
//     $arr = reverse_slice(substr($s, 1));
//     return [...array_map(fn($str) => $str . $s[0], $arr), $s[0]];
// }