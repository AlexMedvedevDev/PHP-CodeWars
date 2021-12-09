INSTRUCTIONS
Task
Given an array/list [] of integers , Find The maximum difference between the successive elements in its sorted form.
Notes
Array/list size is at least 3 .
Array/list's numbers Will be mixture of positives and negatives also zeros_
Repetition of numbers in the array/list could occur.
The Maximum Gap is computed Regardless the sign.
Input >> Output Examples
maxGap ({13,10,5,2,9}) ==> return (4)
Explanation:
The Maximum Gap after sorting the array is 4 , The difference between 9 - 5 = 4 .
maxGap ({-3,-27,-4,-2}) ==> return (23)
Explanation:
The Maximum Gap after sorting the array is 23 , The difference between |-4- (-27) | = 23 .
Note : Regardless the sign of negativity .

SOLUTIONS
<?php
function maxGap($nums) {
    $res = null;
    sort($nums);
    for($i = 1; $i < count($nums); $i++) 
      $res = abs(max($res, $nums[$i] - $nums[$i - 1]));
      return $res;
}

// function maxGap($nums) {
//     sort($nums);
//     $mg = 0;
//     for ($i = 1; $i < count($nums); $i += 1) {
//       $d = $nums[$i] - $nums[$i - 1];
//       if ($d > $mg) {
//         $mg = $d;
//       }
//     }
//     return $mg;
// }