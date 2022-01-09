INSTRUCTIONS
Complete the function that takes one argument, a list of words, and returns the length of the longest word in the list.
For example:
['simple', 'is', 'better', 'than', 'complex'] ==> 7
Do not modify the input list.

SOLUTIONS
<?php
function longest($words) {
    $res = [];
    foreach($words as $i) {
      $res[] = strlen($i);
    }
    return max($res); 
}

// function longest(array $words): int {
//     return max(array_map('strlen',$words));
// }

// function longest($words) {
//     $max = strlen($words[0]);
//     for ($i=1; $i <count($words) ; $i++) {
//       if (strlen($words[$i]) >= $max) {
//        $max = strlen($words[$i]);
//       }
//      }
//     return $max;
// }