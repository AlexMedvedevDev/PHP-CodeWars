INSTRUCTIONS
Implement a function to calculate the distance between two points in n-dimensional space. 
The two points will be passed to your function as arrays of the same length (tuples in Python).
Round your answers to two decimal places.

SOLUTIONS
<?php
function euclidean_distance(array $a, array $b): float {
    return round(sqrt(array_sum(array_map(function($m, $n) { return ($m - $n) ** 2;}, $a, $b))), 2);
}

// function euclidean_distance(array $a, array $b): float {
//     $polinom=0;
//     for ($i=0; $i <count($a) ; $i++) {
//     $polinom+=pow( ($a[$i] - $b[$i]) , 2);
//         }
//     $d=sqrt($polinom);
//     return round($d,2);
// }

// function euclidean_distance(array $a, array $b): float {
//     for ($i = 0; $i < count($a); $i++) $sum += ($a[$i] - $b[$i]) ** 2;
//     return round(sqrt($sum), 2);
// }

// function euclidean_distance(array $a, array $b): float {
//     $l = count($a);
//     $sum = 0;
    
//     for ($i = 0; $i < $l; $i++){
//       $sum += ($a[$i] - $b[$i]) ** 2;
//     }
//     return number_format(sqrt($sum), 2);
// }