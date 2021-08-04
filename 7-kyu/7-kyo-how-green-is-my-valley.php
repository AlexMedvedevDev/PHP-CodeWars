INSTRUCTIONS
Input : an array of integers.

Output : this array, but sorted in such a way that there are two wings:

the left wing with numbers decreasing,

the right wing with numbers increasing.

the two wings have the same length. If the length of the array is odd the wings are around the bottom, if the length is even the bottom is considered to be part of the right wing.

each integer l of the left wing must be greater or equal to its counterpart r in the right wing, the difference l - r being as small as possible. In other words the right wing must be nearly as steep as the left wing.

The function is make_valley or makeValley or make-valley.

a = [79, 35, 54, 19, 35, 25]
make_valley(a) --> [79, 35, 25, *19*, 35, 54]
The bottom is 19, left wing is [79, 35, 25], right wing is [*19*, 35, 54].
79..................54
    35..........35
        25. 
          ..19

a = [67, 93, 100, -16, 65, 97, 92]
make_valley(a) --> [100, 93, 67, *-16*, 65, 92, 97]
The bottom is -16, left wing [100, 93, 67] and right wing [65, 92, 97] have same length.
100.........................97
    93..........
               .........92
        67......
               .....65
            -16     

a = [66, 55, 100, 68, 46, -82, 12, 72, 12, 38]
make_valley(a) --> [100, 68, 55, 38, 12, *-82*, 12, 46, 66, 72]
The bottom is -82, left wing is [100, 68, 55, 38, 12]], right wing is [*-82*, 12, 46, 66, 72].

a = [14,14,14,14,7,14]
make_valley(a) => [14, 14, 14, *7*, 14, 14]

a = [14,14,14,14,14]
make_valley(a) => [14, 14, *14*, 14, 14]

SOLUTIONS
<?php
function makeValley($a) {
    rsort($a); //rsort — Sort an array in descending order
    $left = $right = [];
    foreach ($a as $key => $value) {
      if ($key % 2 ==0 ) {
        $left[] = $value;
      } else {
        array_unshift($right, $value); //array_unshift — Prepend one or more elements to the beginning of an array
      }
    }
      return array_merge($left, $right); // array_merge — Merge one or more arrays
}

// function makeValley($a) {
//     rsort($a);
//     foreach($a as $key => $value) {
//         $key&1 ? $res[count($a)-($key+1)/2] = $value : $res[$key/2] = $value;
//     }
//     return $a ? $res : [];
// }

// function makeValley($a) {
//     $arr = array_values($a);
//     $lg = count($arr);
//     if ($lg <= 1) return $arr;
//     $result = array_values($arr);
//     rsort($arr);
//     $start = 0; $nd = $lg - 1;
//     $i = 1;
//     while ($i < $lg) {
//         $result[$start] = $arr[$i - 1]; $result[$nd] = $arr[$i];
//         $start++; $nd--;
//         $i += 2;
//     }
//     if ($i - 1 == $lg - 1)
//         $result[$start] = $arr[$i - 1];
//     return $result;
// }