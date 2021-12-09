INSTRUCTIONS
Given a string made of digits [0-9], return a string where each digit is repeated a number of times equals to its value.
Examples
digits_explode("312"); // => "333122"
digits_explode("102269"); // => "12222666666999999999"

SOLUTIONS
<?php
function digits_explode(string $s): string {
    $res = [];
    foreach(str_split($s) as $i) {
      array_push($res, str_repeat($i, intval($i)));
    }
    return implode($res);
}

// function digits_explode(string $s): string {
//     return str_replace([0,1,2,3,4,5,6,7,8,9],["",1,22,333,4444,55555,666666,7777777,88888888,999999999],$s);
// }

// function digits_explode(string $s): string {
//     return join(array_map(function($n){return str_repeat($n, (int)$n);}, str_split($s)));
// }

// function digits_explode(string $s): string {
//     $array = str_split($s);
//     foreach ($array as $k => $v) {
//       $str .= str_repeat($v, intval($v));
//     }
//     return $str;
// }