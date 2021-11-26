INSTRUCTIONS
Definition
A Tidy number is a number whose digits are in non-decreasing order.
Task
Given a number, Find if it is Tidy or not .
Input >> Output Examples
tidyNumber (12) ==> return (true)
Explanation:
The number's digits { 1 , 2 } are in non-Decreasing Order (i.e) 1 <= 2 .
tidyNumber (1024) ==> return (false)
Explanation:
The Number's Digits {1 , 0, 2, 4} are not in non-Decreasing Order as 0 <= 1 .

SOLUTIONS
<?php
function tidyNumber($n) {
    $arr = str_split($n);
    $tidy = $arr;
    sort($tidy);
    return ($arr == $tidy) ? true : false;
}

// function tidyNumber($n) {
//     $n = strval($n);
//     for($i=0;$i<strlen($n);$i++) if($n[$i-1] > $n[$i]) return false;
//     return true;
// }

// function tidyNumber($n) {
//     $arr= str_split($n); sort($arr);
//     return implode('', $arr) == (string) $n;
// }
