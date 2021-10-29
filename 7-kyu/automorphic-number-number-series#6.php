INSTRUCTIONS
Definition
A number is called Automorphic number if and only if its square ends in the same digits as the number itself.
Task
Given a number determine if it Automorphic or not .

SOLUTIONS
<?php
function automorphic($n) {
    return $n == substr($n * $n, -strlen($n)) ? 'Automorphic':'Not!!';
}

// function automorphic(int $n): string {
//     return preg_match("/$n$/", $n**2) ? 'Automorphic' : 'Not!!';
// }

// function automorphic($n) {
//     return substr_compare($n**2, $n, strlen($n**2)-strlen($n), strlen($n)) === 0 ? "Automorphic" : "Not!!";
// }