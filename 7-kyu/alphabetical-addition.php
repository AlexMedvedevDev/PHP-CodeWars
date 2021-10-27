INSTRUCTIONS
Your task is to add up letters to one letter.
The function will be given a variable amount of arguments, each one being a letter to add.
Notes:
Letters will always be lowercase.
Letters can overflow (see second to last example of the description)
If no letters are given, the function should return 'z'
Examples:
addLetters('a', 'b', 'c') = 'f'
addLetters('a', 'b') = 'c'
addLetters('z') = 'z'
addLetters('z', 'a') = 'a'
addLetters('y', 'c', 'b') = 'd' // notice the letters overflowing
addLetters() = 'z'

SOLUTIONS
<?php
function addLetters(...$letters) {
    $res = 0;
    $alphabet = 'zabcdefghijklmnopqrstuvwxy';
    foreach($letters as $letter) 
      $res += array_search($letter, str_split($alphabet));
    return $alphabet[$res % 26];
}

// function addLetters(...$arr): string
// {
//   if (empty($arr)) return 'z';
//   $s = array_reduce($arr, function($carry, $item){ // array_reduce — Iteratively reduce the array to a single value using a callback function
//     return $carry + ord($item) - 96; // ord — Convert the first byte of a string to a value between 0 and 255
//   }) - 1;
//   return chr($s % 26 + 97);
// }

// function addLetters(...$letters) {
//     return !empty($letters) ? chr((array_sum(array_map(function($char){ // chr — Generate a single-byte string from a number
//       return ord($char) - 96;
//     }, $letters)) - 1) % 26 + 97) : 'z';
// }