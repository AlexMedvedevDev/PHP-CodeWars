INSTRUCTIONS
Task
We define the middle of the array arr as follows:

if arr contains an odd number of elements, its middle is the element whose index number is the same when counting from the beginning of the array and from its end;

if arr contains an even number of elements, its middle is the sum of the two elements whose index numbers when counting from the beginning and from the end of the array differ by one.

An array is called smooth if its first and its last elements are equal to one another and to the middle. Given an array arr, determine if it is smooth or not.

Example
For arr = [7, 2, 2, 5, 10, 7], the output should be true
The first and the last elements of arr are equal to 7, and its middle also equals 2 + 5 = 7. 
Thus, the array is smooth and the output is true.
For arr = [-5, -5, 10], the output should be false
The first and middle elements are equal to -5, but the last element equals 10. 
Thus, arr is not smooth and the output is false.
Input/Output
[input] integer array arr
The given array.
Constraints: 2 ≤ arr.length ≤ 103, -103 ≤ arr[i] ≤ 103.
[output] a boolean value
true if arr is smooth, false otherwise.

SOLUTIONS
<?php
function is_smooth(array $arr): bool {
    $n = count($arr);
    $middle = $n % 2 ? $arr[floor($n / 2)] : $arr[$n / 2] + $arr[$n / 2 - 1];
    return ($arr[0] == $middle) && ($middle == $arr[$n - 1]);
}

// function is_smooth(array $arr): bool {
//     return $arr[0] == end($arr) && $arr[0] == array_sum(array_slice($arr, (($len = count($arr))- 1) / 2,$len&1?1:2));
// }

// function is_smooth(array $arr): bool {
//     if (count($arr) % 2 === 0) {
//       $mid = $arr[intval(count($arr) / 2)] + $arr[intval(count($arr) / 2) - 1];
//     } else {
//       $mid = $arr[intval(count($arr) / 2)];
//     }
  
//     return $arr[0] === $arr[count($arr)-1] && $mid === $arr[0];
// }