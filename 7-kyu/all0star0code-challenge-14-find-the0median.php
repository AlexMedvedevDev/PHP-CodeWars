INSTRUCTIONS
Your non-profit company has assigned you the task of calculating some simple statistics on donations. 
You have an array of integers, representing various amounts of donations your company has been given. In particular, you're interested in the median value for donations.
The median is the middle number of a sorted list of numbers. 
If the list is of even length, the 2 middle values are averaged.
Write a function that takes an array of integers as an argument and returns the median of those integers.
Notes:
The sorting step is vital.
Input arrays are non-empty.
Examples
Median of [33,99,100,30,29,50] is 41.5.
Median of [3,2,1] is 2.

SOLUTIONS
<?php
function median($a) {
    sort($a);
    $count = count($a);
    $index = floor($count / 2);
    return $count % 2 ? $a[$index] : ($a[$index] + $a[$index - 1]) / 2;
}

// function median($a) {
//     sort($a);
//     $n = count($a);
//     return $n & 1 ? $a[$n / 2] : ($a[$n / 2 - 1] + $a[$n / 2]) / 2;
// }

// function median($a) {
//     sort($a);
//     $middle_index = floor(count($a) / 2);
//     if(count($a) % 2 == 0):
//       return ($a[$middle_index] + $a[$middle_index - 1]) / 2;
//     else:
//       return $a[$middle_index];
//     endif;
// }