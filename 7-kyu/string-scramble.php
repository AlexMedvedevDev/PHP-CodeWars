INSTRUCTIONS
Given a string and an array of index numbers, return the characters of the string rearranged to be in the order specified by the accompanying array.
Ex:
scramble('abcd', [0,3,1,2]) -> 'acdb'
The string that you will be returning back will have: 'a' at index 0, 'b' at index 3, 'c' at index 1, 'd' at index 2, because the order of those characters maps to their corresponding numbers in the index array.
In other words, put the first character in the string at the index described by the first element of the array
You can assume that you will be given a string and array of equal length and both containing valid characters (A-Z, a-z, or 0-9).

SOLUTIONS
<?php
function scramble($str,$arr){
    $a = array_combine($arr, str_split($str)); // array_combine — Creates an array by using one array for keys and another for its values
    ksort($a); // ksort — Sort an array by key in ascending order
    return implode('', $a);
}

// function scramble($str, $arr) {
//     $newStr = $str;
//     for ($i = 0; $i < strlen($str); $i++) {
//       $newStr[$arr[$i]] = $str[$i];
//     }
//     return $newStr;
// }