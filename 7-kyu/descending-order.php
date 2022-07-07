INSTRUCTIONS
Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.
Examples:
Input: 42145 Output: 54421
Input: 145263 Output: 654321
Input: 123456789 Output: 987654321

SOLUTIONS
<?php
function descendingOrder(int $n): int {
    $asArray = str_split($n);
    arsort($asArray);
    return (int) implode($asArray);
}

// function descendingOrder(int $n): int {
//     $array = str_split((string) $n);
//     rsort($array);
//     return implode('', $array);
// }

// function descendingOrder(int $n): int {
//     $numberStr = (string)$n;
//     $array = [];
//     for($i = 0; $i < strlen($numberStr); $i++) {
//         $array[] = substr($numberStr,$i,1);
//     }
//     rsort($array);
//     return implode($array);
// }