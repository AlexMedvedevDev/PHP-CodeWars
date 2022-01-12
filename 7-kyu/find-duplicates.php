INSTRUCTIONS
Given an array, find the duplicates in that array, and return a new array of those duplicates. The elements of the returned array should appear in the order when they first appeared as duplicates.

Note: numbers and their corresponding string representations should not be treated as duplicates (i.e., "1" != 1).

Examples
[1, 2, 4, 4, 3, 3, 1, 5, 3, "5"]  ==>  [4, 3, 1]
[0, 1, 2, 3, 4, 5]                ==>  []

SOLUTIONS
<?php
function duplicates($arr) {
    $unique = [];
    $dups = [];
    foreach($arr as $i) {
      if(array_search($i, $unique, true) === false) {
        $unique[] = $i;
      } else if(array_search($i, $dups, true) === false) {
        $dups[] = $i;
      }
    }
    return $dups;
}

// function duplicates($arr) {
//     $dub = [];
//     foreach($arr as $key => $value) {
//       if ($key != array_search($value, $arr, TRUE) and !in_array($value, $dub)) $dub[] = $value;
//     }
//     return $dub;
// }

// function duplicates($arr) {
//     $s = [];
//     if ($arr == [] ) return $s;
//     foreach ($arr as $k => $a) {
//          if (in_array($a, array_slice($arr, 0, max(0,$k)), true) && ! in_array($a, $s, true) )  $s [] = $a;
//     }
//     return $s;
// }