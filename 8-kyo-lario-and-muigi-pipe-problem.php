INSTRUCTIONS
Given the a list of numbers, return the list so that the values 
increment by 1 for each index up to the maximum value.

Example
Input: 1,3,5,6,7,8
Output: 1,2,3,4,5,6,7,8

SOLUTIONS
<?php
function pipeFix($numbers) {
    return range(min($numbers), max($numbers));
}

// function pipeFix($numbers) {
//     return range($numbers[0], $numbers[count($numbers) - 1]);
// }