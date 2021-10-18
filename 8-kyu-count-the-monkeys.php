INSTRUCTIONS
You take your son to the forest to see the monkeys. 
You know that there are a certain number there (n), but your son is too young to just appreciate the full number, he has to start counting them from 1.
As a good parent, you will sit and count with him. 
Given the number (n), populate an array with all numbers up to and including that number, but excluding zero.

For example:
monkeyCount(10) // --> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
monkeyCount(1) // --> [1]

SOLUTIONS
<?php
function monkeyCount($n) {
    return range(1, $n);
}

// function monkeyCount($n) {
//     $monkeys = [];
//     for($i=1; $i<=$n;$i++)
//     {
//         array_push($monkeys, $i);
//     }    
//     return $monkeys;
// }

// function monkeyCount($n) {
//     $tab = [];
//     for($i=0;$i<$n;$i++) {
//       $tab[$i] = $i+1;
//     }
//     return $tab;
// }