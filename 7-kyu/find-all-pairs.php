INSTRUCTIONS
You are given array of integers, your task will be to count all pairs in that array and return their count.
Notes:
Array can be empty or contain only one value; in this case return 0
If there are more pairs of a certain number, count each pair only once. E.g.: for [0, 0, 0, 0] the return value is 2 (= 2 pairs of 0s)
Random tests: maximum array length is 1000, range of values in array is between 0 and 1000
Examples
[1, 2, 5, 6, 5, 2]  -->  2
...because there are 2 pairs: 2 and 5
[1, 2, 2, 20, 6, 20, 2, 6, 2]  -->  4
...because there are 4 pairs: 2, 20, 6 and 2 (again)

SOLUTIONS
<?php
function duplicates($array){
    $arr = array_count_values($array);
    $res = 0;
    foreach($arr as $i) {
      if ($i >= 2) {
        $res += floor($i / 2);
      }
    }
    return $res;
}

// function duplicates($array): int {
//     return array_sum(array_map(function($n) {
//       return floor($n/2);
//     }, array_count_values($array)));
// }

// function duplicates($array){
//     return array_reduce(array_count_values($array), function($carry, $item){
//       return $carry + floor($item / 2);
//     }, 0);
// }