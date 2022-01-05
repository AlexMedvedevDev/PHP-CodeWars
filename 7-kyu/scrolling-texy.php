INSTRUCTIONS
Let's create some scrolling text!

Your task is to complete the function which takes a string, and returns an array with all possible rotations of the given string, in uppercase.

Example
scrollingText("codewars") should return:
[ "CODEWARS",
  "ODEWARSC",
  "DEWARSCO",
  "EWARSCOD",
  "WARSCODE",
  "ARSCODEW"
  "RSCODEWA",
  "SCODEWAR" ]

SOLUTIONS
<?php
function scrollingText($text) {
    $res = [];
    for($i = 0; $i < strlen($text); $i++) {
      $res[] = strtoupper(substr($text, $i) . substr($text, 0, $i));
    }
    return $res;
}

// function scrollingText($text, $scroll = []) {
//     $scroll[] = strtoupper($text);
//     return strlen($text) === count($scroll) ? $scroll : scrollingText(substr($text, 1) . substr($text, 0, 1), $scroll);
// }

// function scrollingText($text) {
//     $pattern = strtoupper($text . $text);
//     $length = strlen($text);
//     return array_map(function($e) use ($pattern, $length) {
//         return substr($pattern, $e, $length);
//       }, range(0, $length - 1));
// }

// function scrollingText($text) {
//     $text = strtoupper($text);
//     for ($i = 0, $res = [$text]; $i < strlen($text) - 1; $i++)
//       $res[] = ($text = substr($text, 1) . substr($text, 0, 1));
//     return $res;
// }