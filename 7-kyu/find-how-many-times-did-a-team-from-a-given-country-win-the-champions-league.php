INSTRUCTIONS
Create a function that takes two arguments:
An array of objects which feature the season, the team and the country of the Champions League winner.
Country (as a string, for example, 'Portugal')
You function should then return the number which represents the number of times a team from a given country has won. 
Return 0 if there have been no wins.
For example if the input array is as follows:
countWins(winnerList1, 'Spain') => should return 2
countWins(winnerList1, 'Portugal') => should return 1
countWins(winnerList1, 'Sportland') => should return 0

SOLUTIONS
<?php
function countWins($winnerList, $country) {
    return array_count_values(array_column($winnerList, "country"))[$country];
}

// function countWins($winnerList, $country) {
//     return count(array_filter($winnerList, function($c)use($country){ return $c['country']==$country; }));
// }

// function countWins($winnerList, $country) {
//     $count=0;
//     foreach ($winnerList as $season) {
//       $season['country']==$country ? $count++ : null;
//     }
//     return $count;
// }