INSTRICTIONS
Description:
Remove all exclamation marks from the end of words. 
Words are separated by a single space.
Examples
remove("Hi!") === "Hi"
remove("Hi!!!") === "Hi"
remove("!Hi") === "!Hi"
remove("!Hi!") === "!Hi"
remove("Hi! Hi!") === "Hi Hi"
remove("!!!Hi !!hi!!! !hi") === "!!!Hi !!hi !hi"

SOLUTIONS
<?php
function remove(string $s): string {
    $res = [];
    foreach(explode(' ', $s) as $i) {
      array_push($res, rtrim($i, '!'));
    }
    return implode(' ', $res);
}

// function remove(string $s): string {
//     return preg_replace("/(!)+(?=\s|$)/", "", $s);
// }

// function noTrailingExclamationMarks(string $string): string {
//     return rtrim($string, '!');
//   }  
//   function remove(string $s): string {
//     return implode(' ', array_map('noTrailingExclamationMarks', explode(' ', $s))); 
// }
