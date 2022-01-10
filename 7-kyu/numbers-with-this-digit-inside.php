INSTRUCTIONS
You have to search all numbers from inclusive 1 to inclusive a given number x, that have the given digit d in it.
The value of d will always be 0 - 9.
The value of x will always be greater than 0.
You have to return as an array
the count of these numbers,
their sum
and their product.
For example:
x = 11
d = 1
->
Numbers: 1, 10, 11
Return: [3, 22, 110]
If there are no numbers, which include the digit, return [0,0,0]

SOLUTIONS
<?php
function numbersWithDigitInside($x, $d) {
    $count = 0;
    $sum = 0;
    $p = 1;
    for($i = 1; $i <= $x; $i++) {
      if(preg_match("/$d/", $i)) {
        $count++;
        $sum += $i;
        $p = $p * $i;
      }
    }
    $p = ($count == 0) ? 0 : $p + 0; 
      return [$count, $sum, $p];
}

// function numbersWithDigitInside($x, $d) {
//     $solved = [];
//     for($i=1; $i<=$x; $i++){
//       if(false !== strpos((string)$i, (string)$d)){
//           $solved[]=$i;
//       }
//     }
//       if(empty($solved)){
//         return [0,0,0];
//       }
//       return [count($solved), array_sum($solved), array_product($solved)];
// }

// function numbersWithDigitInside($x, $d) {
//     return empty($a = array_filter(range(1, $x), function($v) use ($d) {
//         return (strpos($v, (string)$d) !== false) ? true : false;
//     })) ? [0, 0, 0] : [count($a), array_sum($a), array_product($a)];
// }