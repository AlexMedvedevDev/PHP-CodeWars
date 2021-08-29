INSTRUCTIONS
Description:
Remove all exclamation marks from the end of sentence.

Examples
remove("Hi!") === "Hi"
remove("Hi!!!") === "Hi"
remove("!Hi") === "!Hi"
remove("!Hi!") === "!Hi"
remove("Hi! Hi!") === "Hi! Hi"
remove("Hi") === "Hi"

SOLUTIONS
<?php
function remove(string $s): string {
    return preg_replace('/!+$/', '', $s);
}

// function remove(string $s): string {
//     return rtrim($s, '!');
// }