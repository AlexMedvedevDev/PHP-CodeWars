INSTRUCTIONS
We want an array, but not just any old array, an array with contents!

Write a function that produces an array with the numbers 0 to N-1 in it.

For example, the following code will result in an array containing the numbers 0 to 4:

arr(5) // => [0,1,2,3,4]
Note: The parameter is optional. So you have to give it a default value.

SOLUTIONS
<?php
function arr(int $n=0): array
{
  return $n ? range(0, $n-1) : [];
}

// function arr(int $n = null): array
// {
//   return $n?range(0, $n-1):array();
// }

// function arr(?int $n = null): array {
//     if (!isset($n) || $n <= 0) {
//       return [];
//     }    
//     $numberList = array(0);
//         for ($i = 1; $i < $n; $i++) {
//       array_push($numberList, $i);
//     }    
//     return $numberList;
//   }