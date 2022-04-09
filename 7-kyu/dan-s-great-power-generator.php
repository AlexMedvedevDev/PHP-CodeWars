INSTRUCTIONS
Dan likes to find the nth power of number. 
But he doesn't like it when the result is odd!
Return the nth power of each number, unless the result is odd, in which case round the result to the nearest 10.
Eg. if number = 7, and power = 2, result = 50.

SOLUTIONS
<?php
function danspower(int $num, int $power): int {
    $res = $num ** $power;
    return $res % 2 ? (round($res / 10) * 10) : $res;
}

// function danspower(int $num, int $power): int {
//     $answer = pow($num, $power);
//     return  $answer % 2 ? 10*round($answer/10) : $answer;  
// }

// function danspower(int $num, int $power): int {
//     return ($num = pow($num, $power)) & 1 ? round($num, -1) : $num;
// }