INSTRUCTIONS
Count the number of occurrences of each character and return it as a list of tuples in order of appearance. For empty output return an empty list.

Example:

orderedCount("abracadabra") == [['a', 5], ['b', 2], ['r', 2], ['c', 1], ['d', 1]]

SOLUTIONS
<?php
function orderedCount($text) {
    foreach(array_count_values(str_split($text)) as $char => $count) {
      $char !== '' ? $result[] = [$char, $count] : $result = [];
    }
    return $result;
}

// function orderedCount(string $text): array {
//     if ($text == '')
//       return [];
//     $ks = array_count_values(str_split($text));
//     return array_map(null, array_keys($ks), array_values($ks));
// }

// function orderedCount($text) {
//     if(empty($text)) return [];
//     foreach(array_count_values(str_split($text)) as $key => $value) $res[] = [$key, $value];
//     return $res;
// }