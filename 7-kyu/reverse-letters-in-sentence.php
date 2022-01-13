INSTRUCTIONS
Take a sentence (string) and reverse each word in the sentence. Do not reverse the order of the words, just the letters in each word.
If there is punctuation, it should be interpreted as a regular character; no special rules.
If there is spacing before/after the input string, leave them there.
String will not be empty.
Examples
"Hi mom" => "iH mom"
" A fun little challenge! " => " A nuf elttil !egnellahc "

SOLUTIONS
<?php
function reverser(string $sentence): string {
    return join(' ', array_map('strrev',explode(' ', $sentence)));
}

// function reverser(string $sentence): string {
//     return implode(' ', array_reverse(explode(' ', strrev($sentence))));
// }

// function reverser(string $sentence): string { 
//     $arr=preg_split("/[\s,]+/", $sentence);
//     $result = count($arr);
//     for ($i = 0; $i < $result; $i++) {
//     $arr2 [] = strrev ($arr[$i]);
//     }   
//  return implode(" ", $arr2);
// }