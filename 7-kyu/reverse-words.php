INSTRUCTIONS
Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.
Examples
"This is an example!" ==> "sihT si na !elpmaxe"
"double  spaces"      ==> "elbuod  secaps"

SOLUTIONS
<?php
function reverseWords($str) {
    return implode(" ", array_reverse(explode(" ", strrev($str))));
}

// function reverseWords($text): string {
//     return implode(' ', array_map('strrev', explode(' ', $text)));
// }

// function reverseWords($str) {
//     $arr = explode(' ',$str);
//     $arr_reverse = [];
//     for($i=0; $i<count($arr); $i++ )
//       {
//       $index = $arr[$i];
//       array_push($arr_reverse, strrev($index));
//     }
//        return implode(' ',$arr_reverse);
// }