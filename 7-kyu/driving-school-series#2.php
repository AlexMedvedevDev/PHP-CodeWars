INSTRUCTIONS
Fast & Furious Driving School's (F&F) charges for lessons are as below:
Time	Cost
Up to 1st hour	$30
Every subsequent half hour**	$10
** Subsequent charges are calculated by rounding up to nearest half hour.
For example, if student X has a lesson for 1hr 20 minutes, he will be charged $40 (30+10) for 1 hr 30 mins and if he has a lesson for 5 minutes, he will be charged $30 for the full hour.
Out of the kindness of its heart, F&F also provides a 5 minutes grace period. 
So, if student X were to have a lesson for 65 minutes or 1 hr 35 mins, he will only have to pay for an hour or 1hr 30 minutes respectively.
For a given lesson time in minutes (min) , write a function cost to calculate how much the lesson costs. Input is always > 0.

SOLUTIONS
<?php
function cost($mins) {
    return 30 + 10 * ceil(max(0, $mins - 60 - 5) / 30);  
}

// function cost($mins) {
//     if ($mins <= 0) {
//       return 0;
//     }
//     $firstHourCost = 30;
//     $nextHalfHourCost = 10;
//     $gracePeriodMins = 5;
//     $mins -= 60 + $gracePeriodMins;
//     return $firstHourCost + ceil(max($mins, 0) / 30) * $nextHalfHourCost;
// }

// function cost($mins) {
//     return ($mins < 60) ? 30 : 30 + ceil(($mins - 65) / 30) * 10;
// }

// function cost($mins) 
// {
//   $mins = $mins - 5; /* grace period */
//   if ($mins <= 60)
//     return 30;
//   $res = (int)(30 + (ceil(($mins - 60) / 30)) * 10);
//   return $res;
// }