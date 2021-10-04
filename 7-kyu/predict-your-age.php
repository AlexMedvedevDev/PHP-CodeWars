INSTRUCTIONS
My grandfather always predicted how old people would get, and right before he passed away he revealed his secret!
In honor of my grandfather's memory we will write a function using his formula!
Take a list of ages when each of your great-grandparent died.
Multiply each number by itself.
Add them all together.
Take the square root of the result.
Divide by two.
Example
predictAge(65, 60, 75, 55, 60, 63, 64, 45) == 86
Note: the result should be rounded down to the nearest integer.

SOLUTIONS
<?php 
function predictAge($age1,$age2,$age3,$age4,$age5,$age6,$age7,$age8){
    $res = 0;
    foreach(func_get_args() as $age) {
      $res += $age * $age;
    } 
    return floor(sqrt($res) / 2);
}

// function predictAge(...$a){ // I didn`t get the solution, but it looks great))
//     return array_reduce($a,'hypot',0)>>1;
// }

// function predictAge(...$ages) {
//     return floor(sqrt(array_sum(array_map(function ($age) {
//         return $age * $age;
//     }, $ages))) / 2);
// }

// function predictAge(...$age){
//     return floor(sqrt(array_sum(array_map(function($a){return $a*$a;}, $age))) / 2);
// }

// function predictAge($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8){
//     $ageA = ($a1*$a1)+($a2*$a2)+($a3*$a3)+($a4*$a4)+($a5*$a5)+($a6*$a6)+($a7*$a7)+($a8*$a8);
//     $ageB = sqrt($ageA);
//     $ageC = $ageB/2;
//     return floor($ageC);
// }