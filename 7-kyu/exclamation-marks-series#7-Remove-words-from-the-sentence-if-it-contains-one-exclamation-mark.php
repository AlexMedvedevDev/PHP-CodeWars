INSTRUCTIONS
Description:
Remove words from the sentence if they contain exactly one exclamation mark. Words are separated by a single space, without leading/trailing spaces.
Examples
remove("Hi!") === ""
remove("Hi! Hi!") === ""
remove("Hi! Hi! Hi!") === ""
remove("Hi Hi! Hi!") === "Hi"
remove("Hi! !Hi Hi!") === ""
remove("Hi! Hi!! Hi!") === "Hi!!"
remove("Hi! !Hi! Hi!") === "!Hi!"

SOLUTIONS
<?php
function remove(string $s): string {
  return implode(" ", array_filter(explode(" ", $s), function ($e) {
    return substr_count($e, "!") != 1;
  }));
}

// function remove(string $s): string {
//   return join(' ', array_filter(explode(' ', $s), function($w) {
//     return preg_match_all('/\!/', $w) !== 1;
//   }));
// }

// function remove(string $s): string {
//     return trim(str_replace('|', '', preg_replace('/\|[^!|^\s]*!{1}[^!|^\s]*\s{1}/', '', '|'.str_replace(' ', ' |', $s).' ')));
// }

// function remove(string $s): string {
//     $result = [];
//     $words = explode(' ', $s);
//     foreach ($words as $word) {
//       if (substr_count($word, '!') !== 1) {
//         array_push($result, $word);
//       } 
//     }
//     return implode(' ', $result);
// }