INSTRUCTIONS
The year of 2013 is the first year after the old 1987 with only distinct digits.
Now your task is to solve the following problem: given a year number, find the minimum year number which is strictly larger than the given one and has only distinct digits.
Input/Output
[input] integer year
1000 ≤ year ≤ 9000
[output] an integer
the minimum year number that is strictly larger than the input number year and all its digits are distinct.

SOLUTIONS
<?php
function distinctDigitYear($year) {
    return count(array_unique(str_split($year + 1))) == 4 ? $year + 1 : distinctDigitYear($year + 1);
}

// function distinctDigitYear($year) {
//     do {
//       $year += 1;
//     } while(count(count_chars($year, 1)) < 4);
//     return $year;
// }

// function distinctDigitYear($year) {
//     $year += 1;
//     while (count(array_unique(str_split((string)$year))) !== strlen((string)$year)) {
//       $year += 1;
//     }
//     return $year;
// }