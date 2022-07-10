INSTRUCTIONS
Task:
Given a list of integers, determine whether the sum of its elements is odd or even.
Give your answer as a string matching "odd" or "even".
If the input array is empty consider it as: [0] (array with a zero).
Examples:
Input: [0]
Output: "even"

Input: [0, 1, 4]
Output: "odd"

Input: [0, -1, -5]
Output: "even"

SOLUTIOSN
<?php
function odd_or_even(array $a): string {
    return array_sum($a) % 2 == 0 ? "even" : "odd";
}

// function odd_or_even(array $a): string {
//     return array_sum($a) & 1 ? 'odd' : 'even';
// }

// function odd_or_even(array $array): string {
//     return ['even', 'odd'][array_sum($array) & 1];
// }

// function odd_or_even(array $a): string {
//     $suma = 0;
//       for($i = 0; $i<count($a); $i++){
//           $suma +=$a[$i];
//       }
//       $resto = $suma % 2;
//       if( $resto == 0 ){
//           return "even";
//       }else{
//           return "odd";
//       }
// }