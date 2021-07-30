INSTRUCTIONS
Simple, remove the spaces from the string, then return the resultant string.

SOLUTIONS
<?php
function no_space(string $s): string {
    return str_replace(' ', '', $s);
}

// function no_space(string $s): string {
//     return preg_replace("/\s/", "", $s);
// }

// function no_space(string $s): string {
//     return join('',preg_split("/[\s]+/",$s));
// }