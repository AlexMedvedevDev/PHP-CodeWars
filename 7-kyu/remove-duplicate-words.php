INSTRUCTIONS
Your task is to remove all duplicate words from a string, leaving only single (first) words entries.

Example:

Input:
'alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta'
Output:
'alpha beta gamma delta'

SOLUTIONS
<?php
// function removeDuplicateWords($s)  {
//     $pieces = array_unique(explode(" ", $s));  
//     return implode( " ", $pieces);
// }

function removeDuplicateWords($s) {
    return implode(" ", array_unique(explode(" ", $s)));
}

// function removeDuplicateWords($s) {
//     return implode(' ',array_unique(str_word_count($s,1)));
  
// }