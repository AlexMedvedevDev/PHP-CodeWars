INSTRUCTIONS
If　a = 1, b = 2, c = 3 ... z = 26

Then l + o + v + e = 54

and f + r + i + e + n + d + s + h + i + p = 108

So friendship is twice stronger than love :-)

The input will always be in lowercase and never be empty.

SOLUTIONS
<?php 
function wordsToMarks(string $str): int {
    $arrChar = array_flip(range('a', 'z'));
    $count = 0;
      foreach (str_split($str) as $s) {
          $count += $arrChar[$s] + 1;
      }
      return $count;
}

// function wordsToMarks(string $str): int {
//     return array_sum(array_map('ord',str_split($str)))-strlen($str)*96;
// }

// function wordsToMarks(string $str): int {
//     return array_reduce(str_split($str), function($result, $ch) {
//       return $result + ord($ch) - 96;
//     }, 0);
// }

// function wordsToMarks(string $str): int {
//     $r = 0;
//     for($l=0;$l<strlen($str);$l++)
//       $r+=(ord($str[$l])-96);
//     return $r;
// }