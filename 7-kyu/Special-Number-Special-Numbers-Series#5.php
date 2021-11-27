INSTRUCTIONS
Definition
A number is a Special Number if it’s digits only consist 0, 1, 2, 3, 4 or 5
Given a number determine if it special number or not .

SOLUTIONS
<?php
function specialNumber($n) {
    return max(str_split($n)) <= 5 ? "Special!!" : "NOT!!";
}

// function specialNumber($n) {
//     return preg_match('/^[0-5]+$/', $n) ? "Special!!" : "NOT!!";
// }

// function specialNumber($n) {
//     $ar = [0,1,2,3,4,5];
//     for($i = 0; $i < strlen($n); $i++)
//     {
//       $num = substr($n,$i,1);
//       if (!in_array($num, $ar)) {
//           return "NOT!!";
//       }
//     }
//     return "Special!!";
// }