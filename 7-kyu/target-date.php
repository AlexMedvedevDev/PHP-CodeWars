INSTRUCTIONS
You have an amount of money a0 > 0 and you deposit it with an interest rate of p percent divided by 360 per day on the 1st of January 2016. You want to have an amount a >= a0.

Task:
The function date_nb_days (or dateNbDays...) with parameters a0, a, p will return, as a string, the date on which you have just reached a.
Example:
date_nb_days(100, 101, 0.98) --> "2017-01-01" (366 days)
date_nb_days(100, 150, 2.00) --> "2035-12-26" (7299 days)
Notes:
The return format of the date is "YYYY-MM-DD"
The deposit is always on the "2016-01-01"
Don't forget to take the rate for a day to be p divided by 36000 since banks consider that there are 360 days in a year.
You have: a0 > 0, p% > 0, a >= a0

SOLUTIONS
<?php 
function dateNbDays($a0, $a, $p) {
    $needDays = 0;
    while($a0 < $a){
        $a0 += $a0 * $p / 36000 ;
        $needDays++;
    }
    return date('Y-m-d',strtotime("2016-01-01 +{$needDays} days"));
}

// function dateNbDays($a0, $a, $p) {
//     return date('Y-m-d', strtotime("2016-01-01 + " . (floor(log($a / $a0) / log((36000 + $p) / 36000)) + 1) . ' days'));
// }

// function dateNbDays($a0, $a, $p)
// {
//   for ($day = 0; $a0 < $a; $day++) {
//     $a0 += $p / 36000 * $a0;
//   }

//   $date = new DateTime('2016-01-01');
//   $date->add(new DateInterval("P{$day}D"));

//   return $date->format('Y-m-d');
// }