INSTRUCTIONS
Task:
Given a non-negative integer, 3 for example, return a string with a murmur: "1 sheep...2 sheep...3 sheep...". 
Input will always be valid, i.e. no negative integers.

SOLUTIONS
<?php
function countsheep($num){
    $str = "";
    for($i =1; $i <= $num; $i++) {
      $str .= $i . ' sheep...'; 
    }
    return $str;
}

// function countsheep($num){  
//     return $num == 0 ? "" : countsheep($num - 1)."$num sheep...";
// }

// function countsheep($num) {
//     return implode("", array_map(function ($i) { return "$i sheep..."; }, range(1, $num)));
// }