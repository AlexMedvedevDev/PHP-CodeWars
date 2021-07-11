<!-- INSTRUCTIONS
Given a month as an integer from 1 to 12, return to which 
quarter of the year it belongs as an integer number.

For example: month 2 (February), is part of the first quarter;
month 6 (June), is part of the second quarter; 
and month 11 (November), is part of the fourth quarter.

SOLUTIONS -->
<?php 
function quarterOf($month) {
    return ceil($month / 3);
    // ceil - round fractions up
  }

// function quarterOf($month) {
//     return [0,1,1,1,2,2,2,3,3,3,4,4,4][$month];
// }

// function quarterOf($month) {
//     switch (true) {
//       case $month >= 1  && $month <= 3  : return 1;
//       case $month >= 4  && $month <= 6  : return 2;
//       case $month >= 7  && $month <= 9  : return 3;
//       case $month >= 10 && $month <= 12 : return 4;
//     }
//   }
?>
