INSTRUCTIONS
My friend wants a new band name for her band. She like bands that use the formula: "The" + a noun with the first letter capitalized, for example:
"dolphin" -> "The Dolphin"
However, when a noun STARTS and ENDS with the same letter, she likes to repeat the noun twice and connect them together with the first and last letter, combined into one word (WITHOUT "The" in front), like this:
"alaska" -> "Alaskalaska"
Complete the function that takes a noun as a string, and returns her preferred band name written as a string.

SOLUTIONS
<?php
function band_name_generator(string $s): string {
    return substr($s, -1) == $s[0] ? ucfirst($s).substr($s, 1) : "The " . ucfirst($s);
}


// function band_name_generator(string $s): string {
//     return ucwords(substr($s, 0, 1) == substr($s, -1) ? $s.substr($s, 1) : 'the '.$s);
// }

// function band_name_generator(string $s): string {
//     if ($s[0] == $s[strlen($s)-1]) {
//   $str = ucfirst($s);
//   return $str.=substr($s,1,strlen($s)-1);
//   }else {
//     $str = "The ";
//     return  $str.=ucfirst($s);
//   }
// }