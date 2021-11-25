INSTRUCTIONS
Task
Given an array/list [] of integers , 
Find the Nth smallest element in this array of integers

SOLUTIONS
<?php
function NthSmallest($arr, $pos)
{
  sort($arr);
  return $arr[$pos -1];
}

// function NthSmallest($arr, $pos)
// {
//   rsort($arr);
//   for($i = $pos; $i > 1; $i--){
//     array_pop($arr);
//   }
//   return min($arr);
// }