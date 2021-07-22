INSTUCTIONS
Write a function called repeatStr which repeats the given string exactly n times.

repeatStr(6, "I") // "IIIIII"
repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"

SOLUTIONS
<?php
// function repeatStr($n, $str)
// {
//   return str_repeat($str, $n);
// }

function repeatStr($n, $str) {
    $s = "";
    for ($i = 0; $i < $n; $i++) {
      $s .= $str;
    }
    return $s;
  }