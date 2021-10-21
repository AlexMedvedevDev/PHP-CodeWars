INSTRUCTIONS
Write a function partlist that gives all the ways to divide a list (an array) of at least two elements into two non-empty parts.

Each two non empty parts will be in a pair (or an array for languages without tuples or a structin C - C: see Examples test Cases - )
Each part will be in a string
Elements of a pair must be in the same order as in the original array.
Examples of returns in different languages:
a = ["az", "toto", "picaro", "zone", "kiwi"] -->
[["az", "toto picaro zone kiwi"], ["az toto", "picaro zone kiwi"], ["az toto picaro", "zone kiwi"], ["az toto picaro zone", "kiwi"]] 
or
 a = {"az", "toto", "picaro", "zone", "kiwi"} -->
{{"az", "toto picaro zone kiwi"}, {"az toto", "picaro zone kiwi"}, {"az toto picaro", "zone kiwi"}, {"az toto picaro zone", "kiwi"}}
or
a = ["az", "toto", "picaro", "zone", "kiwi"] -->
[("az", "toto picaro zone kiwi"), ("az toto", "picaro zone kiwi"), ("az toto picaro", "zone kiwi"), ("az toto picaro zone", "kiwi")]
or 
a = [|"az", "toto", "picaro", "zone", "kiwi"|] -->
[("az", "toto picaro zone kiwi"), ("az toto", "picaro zone kiwi"), ("az toto picaro", "zone kiwi"), ("az toto picaro zone", "kiwi")]
or
a = ["az", "toto", "picaro", "zone", "kiwi"] -->
"(az, toto picaro zone kiwi)(az toto, picaro zone kiwi)(az toto picaro, zone kiwi)(az toto picaro zone, kiwi)"

SOLUTIONS
<?php
function partlist($arr) {
    $newArr = [];
    for($i = 1; $i < count($arr); $i++) {
      $newArr[] = [
          implode(" ", array_slice($arr, 0, $i)),
          implode(" ", array_slice($arr, $i))
        ];
      }
    return $newArr;
}

// function partlist($arr) {
//     $cnt = count($arr);
//     $result = array();
//     for ($i = 0; $i < $cnt - 1; $i++) {
//         $part_1 = array_slice($arr, 0, $i + 1);
//         $part_1 = implode(' ', $part_1);

//         $part_2 = array_slice($arr, $i + 1);
//         $part_2 = implode(' ', $part_2);

//         $result[] = [$part_1, $part_2];
//     }
//     return $result;
// }