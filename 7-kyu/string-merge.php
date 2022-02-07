INSTRUCTIONS
Given two words and a letter, return a single word that's a combination of both words, merged at the point where the given letter first appears in each word. The returned word should have the beginning of the first word and the ending of the second, with the dividing letter in the middle. You can assume both words will contain the dividing letter.
Examples
("hello", "world", "l")       ==>  "held"
("coding", "anywhere", "n")   ==>  "codinywhere"
("jason", "samson", "s")      ==>  "jasamson"
("wonderful", "people", "e")  ==>  "wondeople"

SOLUTIONS
<?php
function stringMerge($string1, $string2, $letter) {
    return strstr($string1, $letter, true) . strstr($string2, $letter); // strstr — Find the first occurrence of a string
}

// function stringMerge($s1, $s2, $l): string {
//     return substr($s1, 0, strpos($s1, $l)) . substr($s2, strpos($s2, $l));
// }