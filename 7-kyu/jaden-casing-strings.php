INSTRUCTIONS
When writing on Twitter, he is known for almost always capitalizing every word. 
For simplicity, you'll have to capitalize each word, check out how contractions are expected to be in the example below.
Your task is to convert strings to how they would be written by Jaden Smith. 
The strings are actual quotes from Jaden Smith, but they are not capitalized in the same way he originally typed them.

Example:
Not Jaden-Cased: "How can mirrors be real if our eyes aren't real"
Jaden-Cased:     "How Can Mirrors Be Real If Our Eyes Aren't Real"

SOLUTIONS
<?php 
// function toJadenCase($string) {
//     return ucwords($string);
// }

use function ucwords as toJadenCase;

// function toJadenCase($string) 
// {
//    $new_string = [];
//    $words = explode(" ", $string);
//    foreach($words as $str)
//    {
//      $new_string[] = ucfirst($str);
//    }
//    return implode($new_string," ");
// }
