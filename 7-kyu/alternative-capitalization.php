INSTRUCTIONS
Given a string, capitalize the letters that occupy even indexes and odd indexes separately, and return as shown below. Index 0 will be considered even.
For example, capitalize("abcdef") = ['AbCdEf', 'aBcDeF']. See test cases for more examples.
The input will be a lowercase string with no spaces.

SOLUTIONS
<?php
function capitalize($s) {
    $result = [$s, $s];
    foreach(str_split($s) as $i => $letter) {
      $result[$i % 2][$i] = strtoupper($letter);
    }
    return $result;
}

// function capitalize($s) {
//     $u = strtoupper($s);
//     for ($i = 0; $i < strlen($u); $i += 2) {
//       list($s[$i], $u[$i]) = [$u[$i], $s[$i]];
//     }
//     return [$s, $u];
// }

// function capitalize($s) {  
//     foreach(str_split($s) as $k=>$v){
//       $even = ($k+1)%2==0 ? strtoupper($v) : $v ; 
//       $odd  = ($k+1)%2==0 ? $v : strtoupper($v) ;
//       @$result[0].= $odd;
//       @$result[1].= $even;
//     }
//     return $result;
// }