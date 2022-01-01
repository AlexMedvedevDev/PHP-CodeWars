INSTRUCTIONS
Modify the spacify function so that it returns the given string with spaces inserted between each character.
spacify("hello world") // "h e l l o   w o r l d"

SOLUTIONS
<?php
function spacify(string $s): string {
    return implode(' ', str_split($s));
}

// function spacify(string $s): string {
//     return preg_replace_callback('/.(?!$)/', function($a) { return $a[0] . ' ';}, $s);
// } // preg_replace_callback — Perform a regular expression search and replace using a callback

// function spacify(string $s): string {
//     $str = "";
//     if (strlen($s) < 2){return $s;}
//     for ($i = 0; $i <= strlen($s) - 2; $i++){
//       $str .= $s[$i];
//       $str .= " ";
//     }
//     $str .= $s[-1];
//     return $str;
// }

// function spacify(string $s): string {
//     return rtrim(preg_replace('/\w?/', '$0 ', $s)); // preg_replace — Perform a regular expression search and replace
// }