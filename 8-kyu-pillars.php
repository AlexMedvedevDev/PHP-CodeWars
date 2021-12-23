INSTRUCTIONS
There are pillars near the road. 
The distance between the pillars is the same and the width of the pillars is the same.
Your function accepts three arguments:
number of pillars (≥ 1);
distance between pillars (10 - 30 meters);
width of the pillar (10 - 50 centimeters).
Calculate the distance between the first and the last pillar in centimeters 
(without the width of the first and last pillar).

SOLUTIONS
<?php
function pillars($numberOfPillars, $dist, $width)
{
  if ($numberOfPillars == 1) return 0;
  return (($dist* 100) * ($numberOfPillars- 1)) + (($numberOfPillars -2) * $width);
}

// function pillars($numberOfPillars, $dist, $width)
// {
//   return max(0, ($numberOfPillars-1)*($dist*100+$width)-$width);
// }

// function pillars($numberOfPillars, $dist, $width)
// {
//   return ($numberOfPillars == 1)?0:((($numberOfPillars - 1) * $dist * 100) + (($numberOfPillars - 2) * $width));
// }