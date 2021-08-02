INSTRUCTIONS
The first century spans from the year 1 up to and including the year 100, 
The second - from the year 101 up to and including the year 200, etc.
Task :
Given a year, return the century it is in.
Input , Output Examples :
1705 --> 18
1900 --> 19
1601 --> 17
2000 --> 20

SOLUTIONS
<?php
function centuryFromYear($year)
{
    return ceil($year / 100);
}

// function centuryFromYear($year)
// {
//     if (substr_replace($year, '', 0, 2) !== '00'){
//         return (int) substr_replace($year, '', -2) + 1;
//     } else {
//         return (int) substr_replace($year, '', -2);
//     }
// }

// function centuryFromYear($year){
  
//     for($y=0,$century=0; $y<$year; $y+=100,$century++){

//     }
//     return $century;
// }