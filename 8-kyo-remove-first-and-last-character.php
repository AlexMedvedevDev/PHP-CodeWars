INSTRUCTIONS
It's pretty straightforward. Your goal is to create a function 
that removes the first and last characters of a string.
You're given one parameter, the original string. 
You don't have to worry with strings with less than two characters.

SOLUTIONS
<?php 
function remove_char(string $s): string {
    $s = substr($s, 1, -1); 
    return $s;
}

// function remove_char(string $s) : string
// {
//     $x = str_split($s);
//     array_pop($x);
//     array_shift($x);
//     $imp = implode("", $x);

//     return $imp;
// }
?>