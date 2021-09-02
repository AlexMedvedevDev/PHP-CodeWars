INSTRUCTIONS
To complete this Kata you need to make a function multiplyAll/multiply_all which takes an array of integers as an argument. This function must return another function, which takes a single integer as an argument and returns a new array.

The returned array should consist of each of the elements from the first array multiplied by the integer.

Example:

multiply_all([1, 2, 3])(2); // => [2, 4, 6]
You must not mutate the original array.

SOLUTIONS
<?php 
function multiply_all($arr)
{
	return function ($n) use ($arr) {
		array_walk($arr, function (&$q) use ($n){
			$q *= $n;
		});
		return $arr;
	};
}

// function multiply_all($arr) {
//     return function ($x) use ($arr) {
//       return array_map(function ($y) use ($x) {
//         return $x * $y;
//       }, $arr);
//     };
// }

// function multiply_all(array $ns)
// {
//     return function ($m) use ($ns) {
//         return array_map(function ($n) use ($m) { return $n * $m; }, $ns);
//     };
// }