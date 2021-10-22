INSTRUCTIONS
Task
Given a number , Return _The Maximum number _ could be formed from the digits of the number given .
Notes
Only Natural numbers passed to the function , numbers Contain digits [0:9] inclusive
Digit Duplications could occur , So also consider it when forming the Largest

Input >> Output Examples:
maxNumber (213) ==> return (321)

SOLUTIONS

<?php
function maxNumber($n) {
    $res = str_split($n);
      rsort($res);
    return (int)implode($res);
}

// function maxNumber($n): int{
//     for($i=0;$i<=200000;$i++) $res[] = str_shuffle($n);
//     return ltrim(max($res), 0);
// } // str-shuffle - randomly mix all values in a strins; ltrim- removes allspaces from the beginning of a strins