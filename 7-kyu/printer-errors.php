INSTRUCTIONS
You have to write a function printer_error which given a string will return the error 
rate of the printer as a string representing a rational whose numerator is the number 
of errors and the denominator the length of the control string. Don't reduce this fraction to a simpler expression.
The string has a length greater or equal to one and contains only letters from ato z.
Examples:
s="aaabbbbhaijjjm"
printer_error(s) => "0/14"
s="aaaxbbbbyyhwawiwjjjwwm"
printer_error(s) => "8/22"

SOLUTIONS
<?php
function printerError($s) {
    return strlen(preg_replace('/[a-m]/i', '', $s)) . '/' . strlen($s);
}

// function printerError($s) {
//     $errorCount = strlen(str_replace(range('a','m'), '', $s));
//     $totalCount = strlen($s);
//     return $errorCount.'/'.$totalCount;
// }

// function printerError($s) {
//     $length = strlen($s);
//     $errors = $length - strlen(preg_replace('/[n-z]/', '', $s));
//     return $errors . '/' . $length;
// }