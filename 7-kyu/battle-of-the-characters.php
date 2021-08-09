INSTRUCTIONS
Description:
Groups of characters decided to make a battle. Help them to figure out which group is more powerful. Create a function that will accept 2 variables and return the one who's stronger.

Rules:
Each character have its own power: A = 1, B = 2, ... Y = 25, Z = 26
Only capital characters can and will participate a battle.
Only two groups to a fight.
Group whose total power (A + B + C + ...) is bigger wins.
If the powers are equal, it's a tie.
Examples:
  battle("ONE", "TWO"); // => "TWO"`
  battle("ONE", "NEO"); // => "Tie!"

SOLUTIONS
<?php
function battle($x, $y) {
    // ord — Convert the first byte of a string to a value between 0 and 255
    // ctype_upper — Check for uppercase character(s)
    $xArr = array_sum(array_map(function($c){ return ctype_upper($c) ? ord($c)-64 : 0; }, str_split($x)));
    $yArr = array_sum(array_map(function($c){ return ctype_upper($c) ? ord($c)-64 : 0; }, str_split($y)));
    
    return $xArr==$yArr ? 'Tie!' :($yArr>$xArr ? $y : $x);
}

// function power($s) {
//     return array_sum(array_map(function($e) {
//       return ord($e) - 64;
//     }, str_split($s)));
//   }
  
//   function battle($x, $y) {
//     $l = power($x);
//     $m = power($y);
  
//     return ($l > $m) ? $x : (($l < $m) ? $y : "Tie!");
// }

// unction battle($x, $y) {
//     // Lets the battle begin!
//     $answer = "";
//     $x_value = 0;
//     $y_value = 0;
//     for ($z = 0; $z < strlen($x); $z++)
//     {
//        $temp_1 = ord($x[$z]);
//        $x_value += $temp_1 - 64;
//     }

//     for ($a = 0; $a < strlen($y); $a++)
//     {
//         $temp_2 = ord($y[$a]);
//         $y_value += $temp_2 - 64;
//     }

//     if ($x_value > $y_value) $answer = $x;
//     else if ($y_value > $x_value) $answer = $y;
//     else $answer = "Tie!";
//     return $answer;
// }