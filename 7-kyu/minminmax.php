INSTRUCTIONS
Given an unsorted array of integers, find the smallest number in the array, the largest number in the array, and the smallest number between the two array bounds that is not in the array.
For instance, given the array [-1, 4, 5, -23, 24], the smallest number is -23, the largest number is 24, and the smallest number between the array bounds is -22. You may assume the input is well-formed.
You solution should return an array [smallest, minimumAbsent, largest]
The smallest integer should be the integer from the array with the lowest value.
The largest integer should be the integer from the array with the highest value.
The minimumAbsent is the smallest number between the largest and the smallest number that is not in the array.
minMinMax([-1, 4, 5, -23, 24]); //[-23, -22, 24]
minMinMax([1, 3, -3, -2, 8, -1]); //[-3, 0, 8]
minMinMax([2, -4, 8, -5, 9, 7]); //[-5, -3,9]

<?php
function minMinMax($array) {
    $min = min($array);
    $max = max($array);
    $minAbsent = $min;
    while(in_array($minAbsent, $array)) $minAbsent += 1;
    return [$min, $minAbsent, $max];
}

// function minMinMax($array) {
//     $min = min($array); $max = max($array);
//     return [$min, current(array_diff(range($min, $max), $array)), $max];
// }

// function minMinMax($array): array
// {
//   return [
//     min($array),
//     array_values(array_diff(range(min($array), max($array)), $array))[0],
//     max($array),
//   ];
// }