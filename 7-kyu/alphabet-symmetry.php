INSTRUCTIONS
Consider the word "abode". 
We can see that the letter a is in position 1 and b is in position 2. 
In the alphabet, a and b are also in positions 1 and 2. 
Notice also that d and e in abode occupy the positions they would occupy in the alphabet, which are positions 4 and 5.
Given an array of words, return an array of the number of letters that occupy their positions in the alphabet for each word. 
For example,
solve(["abode","ABc","xyzD"]) = [4, 3, 1]
See test cases for more examples.
Input will consist of alphabet characters, both uppercase and lowercase. 
No spaces.

SOLUTIONS
<?php
function solve($arr) {
    $abc = range('a', 'z');
    $res = []; 
    return array_map(function ($e) use ($abc) {
      return count(array_intersect_assoc($abc, str_split(strtolower($e))));
    }, $arr);
}

// function solve(array $arr): array
// {
//   $acc = [];
//   foreach ($arr as $key => $word) {
//     $acc[$key] = 0;
//     foreach (str_split(strtoupper($word)) as $pos => $letter) {
//       $acc[$key] += ord($letter) - 65 == $pos;
//     }
//   }  
//   return $acc;
// }