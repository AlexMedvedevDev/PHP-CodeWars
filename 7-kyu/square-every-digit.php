INSTRUCTIONS
Welcome. In this kata, you are asked to square every digit of a number and concatenate them.
For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1.
Note: The function accepts an integer and returns an integer

SOLUTIONS
<?php
function square_digits($num){
    $res = "";
    foreach(str_split($num) as $i){
      $res .= $i * $i;
    };
    return intval($res);
}


// function square_digits($num) {
//     $digits = str_split($num);
//     return implode('', array_map('pow', $digits, array_fill(0, count($digits), 2)));
// }

// function square_digits($num){
//     $arr = str_split($num);
//     for($i=0; $i < strlen((string)$num); $i++) {
//       $arr[$i] = $arr[$i]**2;
//     }
//     return implode($arr);
// }