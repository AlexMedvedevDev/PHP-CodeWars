INSTRUCTIONS
Given an array with exactly 5 strings "a", "b" or "c" (chars in Java, characters in Fortran), check if the array contains three and two of the same values.
Examples
["a", "a", "a", "b", "b"] ==> true  // 3x "a" and 2x "b"
["a", "b", "c", "b", "c"] ==> false // 1x "a", 2x "b" and 2x "c"
["a", "a", "a", "a", "a"] ==> false // 5x "a"

SOLUTIONS
<?php
// function checkThreeAndTwo($arr) {
//     $a = 0;
//     $b = 0;
//     $c = 0;
//     foreach($arr as $i) {
//       if ($i == 'a') {
//         $a++;
//       } if ($i == 'b') {
//         $b++;
//       } if ($i == 'c') {
//         $c++;
//       }
//     }
//     return (($a == 2) && ($b == 3)) || (($a == 2) && ($c == 3)) || (($a == 3) && ($b == 2)) || (($a == 3) && ($c == 2)) || (($b == 2) && ($c == 3)) || (($b == 3) && ($c == 2)) ? true : false; 
// }

function checkThreeAndTwo($arr) {
    $counts = array_count_values($arr);
    return count($counts) === 2 && max($counts) === 3;
}

// function checkThreeAndTwo($arr) {
//     return empty(array_diff(array(2, 3), array_count_values($arr)));
// }