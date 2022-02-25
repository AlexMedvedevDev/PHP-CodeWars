INSTRUCTIONS
Description:
Remove all exclamation marks from sentence except at the end.
Examples
remove("Hi!") == "Hi!"
remove("Hi!!!") == "Hi!!!"
remove("!Hi") == "Hi"
remove("!Hi!") == "Hi!"
remove("Hi! Hi!") == "Hi Hi!"
remove("Hi") == "Hi"

SOLUTIONS
<?php
function remove(string $s): string {
    return preg_replace('/!(?!!*$)/', '', $s);
}

// function remove(string $s): string {
//     $count = 0;
//     while (substr($s, -1) == '!') {
//       ++$count;
//       $s = substr($s, 0, -1);
//     }
//     return str_replace('!', '', $s) . str_repeat('!', $count);
// }

// function remove(string $s): string {
//     $postfix = preg_replace('/(.+)[^!+$]/', '', $s);
//     return str_replace('!', '', $s) . $postfix;
// }