INSTRUCTIONS
Check to see if a string has the same amount of 'x's and 'o's. 
The method must return a boolean and be case insensitive. 
The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false

SOLUTIONS
<?php 
// function XO($s) {
//     $str = strtolower($s);
//     $x = substr_count($str, 'x');
//     $o = substr_count($str, 'o');  
//     return $x == $o;  
// }

function XO($s) {
    $lower = strtolower($s);
    return substr_count($lower, 'x') === substr_count($lower, 'o');
}

// function XO($s) {
//     $s = strtolower($s);
//     $balance = 0;  // +1 for each 'x', -1 for each 'o';
    
//     $len = strlen($s);
//     for ($i = 0; $i < $len; $i++) {
//       if ($s[$i] == 'x') { $balance++; }
//       elseif ($s[$i] == 'o') { $balance--; }
//     }  
//     return $balance == 0;
// }