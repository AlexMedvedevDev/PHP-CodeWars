INSTRUCTIONS
Given a string of words (x), you need to return an array of the words, sorted alphabetically by the final character in each.
If two words have the same last letter, they returned array should show them in the order they appeared in the given string.
All inputs will be valid.

SOLUTIONS
<?php
function last($x)
{
  $words = explode(' ', $x);
  usort($words, function($a, $b) {
    return substr($a, -1) <=> substr($b, -1);
  });
  return $words;
}

// function last($x) {
//     $words = explode(" ", $x);
//     $lastChars = array_map(function ($e) {
//         return substr($e, -1);
//       }, $words);
//     array_multisort($lastChars, array_keys($words), $words);
//     return $words;
// }

// function last($x)
// {
//   $words = explode(' ', $x);
//   usort($words, function($a, $b) {
//     return $a[strlen($a) - 1] <=> $b[strlen($b) - 1];
//   });

//   return $words;
// }