INSTRUCTIONS
You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.
#Examples:
Kata.getMiddle("test") should return "es"
Kata.getMiddle("testing") should return "t"
Kata.getMiddle("middle") should return "dd"
Kata.getMiddle("A") should return "A"

SOLUTIONS
<?php
function getMiddle($text) {
    $len = strlen($text);
    if ($len % 2 == 0) {
      return substr($text, $len / 2 -1, 2);
    }
    return substr($text, $len / 2, 1);
}

// function getMiddle($text) {
//     $start = floor((strlen($text) - 1) / 2);
//     $len = strlen($text) % 2 ? 1 : 2;
//     return substr($text, $start, $len);
// }

// function getMiddle($text) {
//     $length = strlen($text);
//     return substr($text, ($length - 1) / 2, $length % 2 == 0 ? 2 : 1);
// }