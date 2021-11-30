INSTRUCTIONS
In this Kata, you will be given a string that has lowercase letters and numbers. 
Your task is to compare the number groupings and return the largest number.
Numbers will not have leading zeros.
For example, solve("gh12cdy695m1") = 695, because this is the largest of all number groupings.

SOLUTIONS
<?php
function solve($s) {
    return max(preg_split('/[a-z]/', $s));
}

// function solve($s) {
//     preg_match_all('|\d+|', $s, $matches); 
//     return max($matches[0]);
// }

// function solve($s): int
// {
//   return max(explode('.', preg_replace("/[a-z]/", '.', $s)));
// }

// function solve($s) {
//     preg_match_all('@[0-9]+@', $s, $maches);
//          return max($maches[0]);
// }