INSTRUCTIONS
Given an array of integers, return a new array with each value doubled.
For example:
[1, 2, 3] --> [2, 4, 6]
For the beginner, try to use the map method - it comes in very handy quite a lot so is a good one to know.

SOLUTIONS
<?php
// function maps($x)
// {
//   foreach($x as $value) {
//      $new_maps[] = $value * 2; 
//   }
//   return $new_maps;
// }

// function maps($x)
// {
//   return array_map(function($el) {
//     return $el * 2;
//   }, $x);
// }

function maps($x){
    return array_map(function($n){return $n * 2;}, $x);
}

