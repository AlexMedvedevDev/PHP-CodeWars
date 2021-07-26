INSTRUCTIONS
Given an array of numbers, check if any of the numbers are the character 
codes for lower case vowels (a, e, i, o, u).
If they are, change the array value to a string of that vowel.
Return the resulting array.

SOLUTIONS
<?php
function isVow(array $a)
{
    return str_replace(['97', '101', '105', '111', '117'], ['a','e','i','o','u'], $a);
}

// function isVow(array $a)
// {
//  return array_map(function ($t){ 
//   return in_array(chr($t), str_split("aeiou"))?chr($t):$t;
//   },$a);  
// }

// function isVow( array $a ) {
//     return array_map(function( $ord ) { 
//         if ( in_array( $chr = chr( $ord ), ["a", "e", "i", "o", "u"] ) ) 
//             return $chr;
//         return $ord; 
//     }, $a );
// }