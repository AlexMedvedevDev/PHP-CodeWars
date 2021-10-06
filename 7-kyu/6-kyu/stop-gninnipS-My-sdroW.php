INSTRUCTIONS
Write a function that takes in a string of one or more words, and returns the same string, but with all five or more letter words reversed (like the name of this kata).

Strings passed in will consist of only letters and spaces.
Spaces will be included only when more than one word is present.
Examples:

spinWords("Hey fellow warriors") => "Hey wollef sroirraw" 
spinWords("This is a test") => "This is a test" 
spinWords("This is another test") => "This is rehtona test"

SOLUTIONS
<?php
// function spinWords(string $str): string {
//     return implode(" ", array_map(function ($e) {
//         return strlen($e) > 4 ? strrev($e) : $e;
//       }, explode(" ", $str)));
// }

function spinWords(string $str): string {
    return preg_replace_callback('/\w{5,}/', function($matches) {return strrev($matches[0]);}, $str);
}

// function spinWords(string $str): string {
//     $boom = explode(' ', $str);
//     foreach ($boom as &$word) {
//       if (strlen($word) >= 5) {
//         $word = strrev($word);
//       }
//     }    
//     return implode(' ', $boom);
// }