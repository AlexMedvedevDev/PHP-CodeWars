INSTRUCTIONS
Write function parseFloat which takes an input and returns a number or Nothing if conversion is not possible.

SOLUTIONS
<?php
function parseFloat ($s) {
    return floatval($s);
}

// function parseFloat(string $s) {
//     return preg_match("/\d/", $s) ? (float) $s : null;
// }

// function parseFloat(string $s)
// {
//   return ($s!=null) ? floatval($s) :'string';
// }