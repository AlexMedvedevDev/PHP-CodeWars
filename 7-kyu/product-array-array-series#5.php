INSTRUCTIONS
Task
Given an array/list [] of integers , Construct a product array Of same size Such That prod[i] is equal to The Product of all the elements of Arr[] except Arr[i].
Notes
Array/list size is at least 2 .
Array/list's numbers Will be only Positives
Repetition of numbers in the array/list could occur.
Input >> Output Examples
productArray ({12,20}) ==>  return {20,12}
Explanation:
The first element in prod [] array 12 is the product of all array's elements except the first element
The second element 20 is the product of all array's elements except the second element .
productArray ({1,5,2}) ==> return {10,2,5}
Explanation:
The first element 10 is the product of all array's elements except the first element 1
The second element 2 is the product of all array's elements except the second element 5
The Third element 5 is the product of all array's elements except the Third element 2.
productArray ({10,3,5,6,2}) return ==> {180,600,360,300,900}
Explanation:
The first element 180 is the product of all array's elements except the first element 10
The second element 600 is the product of all array's elements except the second element 3
The Third element 360 is the product of all array's elements except the third element 5
The Fourth element 300 is the product of all array's elements except the fourth element 6
Finally ,The Fifth element 900 is the product of all array's elements except the fifth element 2

SOLUTIONS
<?php
function productArray($nums) {
    $arr = [];
    foreach($nums as $i) {    
      array_push($arr, array_product($nums) / $i);
    }
    return $arr;
}

// function productArray($nums) {
//     $p = array_product($nums);
//     return array_map(function($e) use ($p) {
//         return $p / $e;
//       }, $nums);
// }

// function productArray($nums) {
//     for($a=0;$a<count($nums);$a++){
//       $prod[] = array_product($nums) / $nums[$a];
//     }
//     return $prod;
// }

// function productArray($arr) {
//     $tot=  array_reduce($arr, function($v,$x){return $v*$x;}, 1);
//     return array_map(function($x)use($tot){return $tot/$x;}, $arr);
// }

// function productArray($nums) {
//     return array_map(function ($n) use ($nums) { return array_product($nums)/$n; },$nums);
// }