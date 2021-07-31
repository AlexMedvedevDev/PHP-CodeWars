INSTRUCTIONS
You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20
Note: if there is nothing to sum, the sum is default to 0.

SOLUTIONS
<?php
// function positive_sum($arr) {
//     if (count($arr) == 0) return 0;
//     $total = 0;
//     foreach($arr as $number)
//     {
//       if($number > 0)
//         $total += $number;
//     }
//     return $total;
// }

function positive_sum($a) {
    return array_sum(array_filter($a, function ($n) {return $n > 0;}));
}