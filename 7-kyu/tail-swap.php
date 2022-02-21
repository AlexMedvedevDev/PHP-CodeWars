INSTRUCTIONS
You'll be given a list of two strings, and each will contain exactly one colon (":") in the middle (but not at beginning or end). The length of the strings, before and after the colon, are random.
Your job is to return a list of two strings (in the same order as the original list), but with the characters after each colon swapped.
Examples
["abc:123", "cde:456"]  -->  ["abc:456", "cde:123"]
["a:12345", "777:xyz"]  -->  ["a:xyz", "777:12345"]

SOLUTIONS
<?php
function tail_swap(array $a): array {
    $a1 = explode(":", $a[0]);
    $a2 = explode(":", $a[1]);
    return array("$a1[0]:$a2[1]", "$a2[0]:$a1[1]");
}

// function tail_swap(array $a): array {
//     return [strstr($a[0], ":", true) . strstr($a[1], ":"), strstr($a[1], ":", true) . strstr($a[0], ":")]; // strstr — Find the first occurrence of a string
// }

// function tail_swap(array $arr): array
// {
//     list($a, $b) = [explode(":", $arr[0]), explode(":", $arr[1])];
//     return ["$a[0]:$b[1]", "$b[0]:$a[1]"];
// }