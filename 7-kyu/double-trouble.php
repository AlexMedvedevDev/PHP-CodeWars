INSTRUCTIONS
Given an array of integers (x), and a target (t), you must find out if any two consecutive numbers in the array sum to t. 
If so, remove the second number.

Example:

x = [1, 2, 3, 4, 5]
t = 3

1+2 = t, so remove 2. No other pairs = t, so rest of array remains:

[1, 3, 4, 5]

Work through the array from left to right.

Return the resulting array.

SOLUTIONS
<?php 
function trouble($x, $t)
{
  $i = 1;
  while ($i < count($x)){
     if ($x[$i-1] + $x[$i] == $t) {
      unset($x[$i]);
       $x= array_values($x);
      } else {
        $i++;
    }
  }
  return $x;
}

// function trouble($x, $t)
// {
//   for ($i = 0; $i < count($x) - 1; ++$i) {
//     if ($x[$i]+$x[$i+1] === $t) {
//       array_splice($x, $i+1, 1);
//       $i--;
//     }
//   }
//   return $x;
// }