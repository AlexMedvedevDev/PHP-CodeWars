INSTRUCTIONS
Return the number (count) of vowels in the given string.
We will consider a, e, i, o, u as vowels for this Kata (but not y).
The input string will only consist of lower case letters and/or spaces.

SOLUTIONS
<?php
function getCount($str) {
    return preg_match_all('/[aeiou]/i',$str,$matches);
}

// function getCount($str) {
//     $vowelsCount = substr_count($str, 'a') + substr_count($str, 'e') + substr_count($str, 'i') + substr_count($str, 'o') + substr_count($str, 'u');
//     return $vowelsCount;
// }

// function getCount($str) {
//     $vowelsCount = 0;
//     $vowels = ['a', 'e', 'i', 'o', 'u'];
//     foreach($vowels as $vowel) {
//       $vowelsCount += substr_count($str, $vowel);
//     }    
//     return $vowelsCount;
// }