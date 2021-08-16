INSTRUCTIONS
Your task is to write a function called valid_spacing() or validSpacing() which checks if a string has valid spacing. The function should return either True or False.

For this kata, the definition of valid spacing is one space between words, and no leading or trailing spaces. Below are some examples of what the function should return.

'Hello world' = true
' Hello world' = false
'Hello world  ' = false

SOLUTIONS
<?php
function valid_spacing($s)  {
    return !preg_match("/^ |  | $/", $s);
}

// function valid_spacing($s) {
//     return $s == trim($s) && !str_contains($s, "  ");
// }

// function valid_spacing($s) {
//     return !preg_match('/^\s|\s\s+|\s$/', $s);
// }

// function valid_spacing($s)
// {
//     if ($s == "")
//         return true;
//     if ($s[0] == ' ' || $s[strlen($s)-1] == ' ')
//         return false;

//     $is_extra = false;
//     for($i = 1; $i < strlen($s) && !$is_extra; $i++)
//         if($s[$i] == ' ' && $s[$i-1] == ' ')
//             $is_extra = true;

//     return !$is_extra;
// }
