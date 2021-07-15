INSTRUCTIONS
Your function takes two arguments:
current father's age (years)
current age of his son (years)
Сalculate how many years ago the father was twice as old as his son 
(or in how many years he will be twice as old).

SOLUTIONS
<?php 
function twice_as_old($dad_years_old, $son_years_old) {
    return abs(($dad_years_old - $son_years_old) - $son_years_old);
}

//The abs() function is an inbuilt function in PHP which is used to return the absolute (positive) value of a number. 

// function twice_as_old($dad_years_old, $son_years_old) {
//     return abs( $dad_years_old - $son_years_old * 2);
// }



