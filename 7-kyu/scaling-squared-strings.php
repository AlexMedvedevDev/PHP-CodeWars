INSTRUCTIONS
You are given a string of n lines, each substring being n characters long. For example:

s = "abcd\nefgh\nijkl\nmnop"

We will study the "horizontal" and the "vertical" scaling of this square of strings.

A k-horizontal scaling of a string consists of replicating k times each character of the string (except '\n').

Example: 2-horizontal scaling of s: => "aabbccdd\neeffgghh\niijjkkll\nmmnnoopp"
A v-vertical scaling of a string consists of replicating v times each part of the squared string.

Example: 2-vertical scaling of s: => "abcd\nabcd\nefgh\nefgh\nijkl\nijkl\nmnop\nmnop"
Function scale(strng, k, v) will perform a k-horizontal scaling and a v-vertical scaling.

Example: a = "abcd\nefgh\nijkl\nmnop"
scale(a, 2, 3) --> "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp"

SOLUTIONS
<?php
function scale($s, $k, $n) {
    $s = preg_replace( '/[^\n]/', str_repeat('$0', $k), "$s\n");
    $s = preg_replace( '/(\w*\n)/', str_repeat('$1', $n), $s );
    
    return trim($s);
}

// function scale($s, $k, $n) {
//     $lines = explode(PHP_EOL, $s);
//     $result = '';
//     foreach($lines as $line) {
//       $hScaleString = '';
//       for($i = 0; $i < strlen($line); $i++) {
//          $hScaleString .= str_repeat($line[$i], $k);
//       }
//       $result .= str_repeat($hScaleString . PHP_EOL, $n);
//     }
    
//     return $s ? trim($result) : '';
// }

// function scaleString($s, $k) {
//     $b = array_map(
//             function ($x) use(&$k) 
//             { 
//                 return str_repeat($x, $k); 
//             }, str_split($s));
//     return implode("", $b);
// }
// function scaleArray($arr, $n) {
//     $res = [];
//     for ($i = 0; $i < count($arr); $i++)
//         for ($j = 0; $j < $n; $j++)
//             array_push($res, $arr[$i]);
    
//     return $res;
// }
// function scale($s, $k, $n) {
//     if (strlen($s) == 0) return "";
//     $b = array_map(function ($x) use(&$k) { return scaleString($x, $k); }, explode("\n", $s));
//     return implode("\n", scaleArray($b, $n));
// }