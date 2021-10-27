INSTRUCTIONS
Have you heard about the myth that if you fold a paper enough times, you can reach the moon with it? 
Sure you have, but exactly how many? 
Maybe it's time to write a program to figure it out.
You know that a piece of paper has a thickness of 0.0001m. 
Given distance in units of meters, calculate how many times you have to fold the paper to make the paper reach this distance.
(If you're not familiar with the concept of folding a paper: Each fold doubles its total thickness.)
Note: Of course you can't do half a fold. You should know what this means ;P
AlSo, if somebody is giving you a negative distance, it's clearly bogus and you should yell at them by returning null (or whatever equivalent in your language. In Shell please return None).

SOLUTIONS
<?php
function fold_to($distance) {
    $num = 0.0001;
    $result = 0;
    while($num < $distance){ 
      $result++; 
      $num = $num * 2;
    }
    return $distance <= 0 ? null : $result;
}

// function fold_to($n) {
//     return $n > 0 ? max(0, ceil(log(1e4 * $n, 2))) : NULL;
// }

// function fold_to($distance) {
//     return $distance < 0 ? null : max(0, ceil(log(10000 * $distance, 2)));
// }

// function fold_to($distance) {
//     for($i=0.0001;$i<=$distance;$i*=2){
//     $a+=1;
//     }
//     return $a;
// }