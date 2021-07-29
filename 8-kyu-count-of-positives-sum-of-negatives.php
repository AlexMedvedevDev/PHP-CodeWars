INSTRUCTIONS
Given an array of integers.

Return an array, where the first element is the count of positives numbers 
and the second element is sum of negative numbers.
If the input array is empty or null, return an empty array.
Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], 
you should return [10, -65].

SOLUTIONS
<?php
function countPositivesSumNegatives($input) {
    if (empty($input)) return []; 
    
      $arrPos = 0;
      $arrNeg = 0;
      foreach ($input as $value) {
        $value > 0 ? $arrPos ++ : $arrNeg += $value;
          }
      return array ($arrPos, $arrNeg);
}

// function countPositivesSumNegatives($input) {
//     if (empty($input)) {
//       return [];
//     }
    
//     $positives = array_filter($input, function($i) { return $i > 0; });
//     $negatives = array_filter($input, function($i) { return $i < 0; });
    
//     return [count($positives), array_sum($negatives)];
//   }

// function countPositivesSumNegatives($a) {
//     return !count($a) ? [] : [count(array_filter($a, function ($e) {return $e > 0;})), array_sum(array_filter($a, function ($e) {return $e < 0;}))];
//   }