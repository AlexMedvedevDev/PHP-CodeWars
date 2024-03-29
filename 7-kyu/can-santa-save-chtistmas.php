INSTRUCTIONS
Can Santa save Christmas?
Oh no! Santa's little elves are sick this year. He has to distribute the presents on his own.
But he has only 24 hours left. Can he do it?
Your Task:
You will get an array as input with time durations as string in the following format: HH:MM:SS. 
Each duration represents the time taken by Santa to deliver a present. 
Determine whether he can do it in 24 hours or not. 
In case the time required to deliver all of the presents is exactly 24 hours, Santa can complete the delivery ;-) .

SOLUTIONS
<?php
function determine_time(array $durations): bool {
    return array_sum(array_map(function($e) {
      list($h, $m, $s) = explode(":", $e);
      return $h * 3600 + $m * 60 + $s;
    }, $durations)) <= 24 * 3600;
}

// function determine_time(array $durations): bool {
//     return array_reduce($durations, function($carry,$cur){
//         list($hour,$minute,$second) = explode(":", $cur);
//         return $carry + $hour * 3600 + $minute * 60 + $second;
//     },0) <= 86400;
// }