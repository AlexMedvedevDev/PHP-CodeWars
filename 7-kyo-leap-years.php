INSTRUCTIONS
In this kata you should simply determine, whether a given year
is a leap year or not. In case you don't know the rules, 
here they are:
-years divisible by 4 are leap years
-but years divisible by 100 are not leap years
-but years divisible by 400 are leap years
Additional Notes:
Only valid years (positive integers) will be tested, 
so you don't have to validate them

SOLUTIONS
<?php 
function isLeapYear($year) {
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}

// function isLeapYear($year): bool {
//     return $year % 4 == 0 and ($year % 100 != 0 or $year % 400 == 0);
// }

// function isLeapYear(int $year): bool {
//     return (bool) date('L', strtotime("$year-01-01"));
// }

// function isLeapYear($year) {
//     return $year % 100 ? !($year % 4) : !($year % 400);
// }