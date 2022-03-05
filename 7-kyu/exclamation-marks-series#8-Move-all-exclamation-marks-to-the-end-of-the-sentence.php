INSTRUCTIONS
Description:
Move all exclamation marks to the end of the sentence
Examples
remove("Hi!") === "Hi!"
remove("Hi! Hi!") === "Hi Hi!!"
remove("Hi! Hi! Hi!") === "Hi Hi Hi!!!"
remove("Hi! !Hi Hi!") === "Hi Hi Hi!!!"
remove("Hi! Hi!! Hi!") === "Hi Hi Hi!!!!"

SOLUTIONS
<?php
function remove(string $s): string {
    return str_replace("!", "", $s, $c) . str_repeat('!', $c);
}

// function remove(string $s): string {
//   return str_pad(str_replace("!", "", $s),  strlen($s), "!");
// }

// function remove(string $s): string {
//     $removeItem = "!";
//     $exclams = array();
//     $arr = str_split($s);
//     foreach ($arr as $char) {
//         if ($char == '!') {
//             array_push($exclams, $char);
//         }
//     }
//     $diffArray = array_diff($arr, array($removeItem));
//     $mergedArrs = array_merge($diffArray, $exclams);
//     return implode($mergedArrs);
// }

// function remove(string $s): string {
//     return preg_replace('/!/', '', $s, -1, $n).str_repeat('!', $n);
// }