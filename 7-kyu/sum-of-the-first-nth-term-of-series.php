INSTRUCTIONS
Task:
Your task is to write a function which returns the sum of following series upto nth term(parameter).
Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...
Rules:
You need to round the answer to 2 decimal places and return it as String.
If the given value is 0 then it should return 0.00
You will only be given Natural Numbers as arguments.

Examples:
SeriesSum(1) => 1 = "1.00"
SeriesSum(2) => 1 + 1/4 = "1.25"
SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"

SOLUTIONS
<?php 
function series_sum($n) {
    for ($s = 0, $i = 0; $i < $n; $i++) {
      $s += 1 / (1 + $i * 3);
    }
   return number_format($s, 2, '.');
}

// function series_sum($n) {
//     return $n <= 0 ? '0.00' : sprintf('%.2f', array_sum(array_map(function ($c) {return 1/($c*3+1);}, range(0, $n-1))));
// }

// function series_sum($n){
//     for($i=0; $i<$n; $i++){
//       $sum += 1/(1+$i*3);
//     }  
//     return number_format($sum, 2, '.', '');
// }