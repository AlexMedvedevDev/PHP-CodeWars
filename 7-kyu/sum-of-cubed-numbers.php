INSTRUCTIONS
Find the sum of the odd numbers within an array, after cubing the initial integers. 
The function should return undefined/None/nil/NULL if any of the values aren't numbers.

SOLUTIONS
<?php
function cube_odd($a) {
    $res = 0;
    $cube = [];
    foreach ($a as $key => $value) {
      if (!is_numeric($value)) { 
        return null;
      }
        array_push($cube, $value * $value * $value);
      }
    foreach ($cube as $key => $value) {
      if ($value %2 !== 0) {
        $res += $value;
      }
    }
    return $res;
}

// function cube_odd($a) {
//     $sum = 0;
//     foreach ($a as $e) {
//       if (!is_int($e)) {
//         return null;
//       }
//       if ($e % 2) {
//         $sum += $e ** 3;
//       }
//     }
//     return $sum;
// }

// function cube_odd(array $a) {
//     foreach($a as $v) {
//       if (!is_numeric($v)) {
//         return null;
//       }
//       $cubbedVal = pow($v, 3);
//       if ($cubbedVal % 2 != 0) {
//         $result += $cubbedVal;
//       }
//     }
//     return $result;
// }