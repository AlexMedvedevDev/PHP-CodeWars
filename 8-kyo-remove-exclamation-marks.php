INSTRUCTIONS
Write function RemoveExclamationMarks which removes all
 exclamation marks from a given string.
SOLUTIONS
<?php
function remove_exclamation_marks($string) {
    return str_replace('!', '', $string);
}

// function remove_exclamation_marks($string) {
//     $result = [];
//     for ($i = 0; $i < strlen($string); $i++) {
//       if ($string[$i] !== '!') {
//         $result[] = $string[$i];
//       }
//     }
//     return implode('', $result);
// }