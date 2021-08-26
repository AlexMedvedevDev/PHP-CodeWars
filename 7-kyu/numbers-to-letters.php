INSTRUCTIONS
Given an array of numbers (in string format), you must return a string. 
The numbers correspond to the letters of the alphabet in reverse order: a=26, z=1 etc. 
You should also account for '!', '?' and ' ' that are represented by '27', '28' and '29' respectively.
All inputs will be valid.

SOLUTIONS
<?php
// function switcher($arr)
// { 
//   return implode(array_map(function ($e) {
//     return " zyxwvutsrqponmlkjihgfedcba!? "[$e];
//   }, $arr));
// }

// function switcher($arr)
// {
//   $alphabet = array_reverse(range("a", "z"));
//   array_push($alphabet, "!", "?", " ");
//   foreach ($arr as $char) {
//     $res[] = $alphabet[$char-1];
//   }
//   return implode($res);
// }

// function switcher(array $arr): string
// {
//   $alphabet = array_merge(range('z', 'a'), ['!', '?', ' ']);
//   $result = '';
//   foreach ($arr as $char) {
//     $result .= $alphabet[$char - 1];
//   }  
//   return $result;
// }

// function switcher($arr)
// {
//   $alphabet = array_combine(range(1, 26), array_reverse(range('a', 'z')));
//   array_push($alphabet, '!', '?', ' ');
//   return implode(array_map(function ($element) use ($alphabet) {
//     return $alphabet[$element];
//   }, $arr));
// }

function switcher($arr) {
    return join(array_map(function($e){return (strrev(join(range('a','z'))).'!? ')[$e-1];}, $arr));
}