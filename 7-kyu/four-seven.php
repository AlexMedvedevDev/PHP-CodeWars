INSTRUCTIONS
Four Seven
Simple kata, simple rules: your function should accept the inputs 4 and 7. 
If 4 is entered, the function should return 7. 
If 7 is entered, the function should return 4. 
Anything else entered as input should return 0. 
There's only one catch, your function cannot include if statements, 
switch statements, or the ternary operator 
(or the eval function due to the fact that you can get around the if requirement using it).
There are some very simple ways of answering this problem, but I encourage you to try and be as creative as possible.

SOLUTIONS
<?php
function solution($n){
    return (int)@[ 4=> 7, 7 => 4][$n];
}

// function solution($n){
//     $answer = array(
//       4 => 7,
//       7 => 4
//     );
//     try{
//       return $answer[$n];
//     } catch (Exception $ex){
//       return 0;
//     }
// }

// function solution($n){
//     return 4*($n==7) + 7*($n==4);
// } // how it works??

// function solution(int $n): int {
//     return (11 - $n) * (int)($n === 4 || $n === 7);
// } // what is this?