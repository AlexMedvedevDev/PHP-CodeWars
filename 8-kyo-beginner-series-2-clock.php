<!-- Clock shows 'h' hours, 'm' minutes and 's' seconds after midnight.
Your task is to make 'Past' function which returns time converted to milliseconds.

Example:
past(0, 1, 1) == 61000
Input constraints: 0 <= h <= 23, 0 <= m <= 59, 0 <= s <= 59
1 second equals 1000 milliseconds,  1 minute equals 60000 ms, 1 hour equals 3600000 ms.

Solution: -->
<!-- function past($h, $m, $s) {
  return 60 * 60 * 1000 * $h + 60 * 1000 * $m + 1000 * $s;
}

function past($h, $m, $s) {
  return $s*1000+$m*60000+$h*3600000;
} -->

function past($h, $m, $s) {
 return (($h*60+$m)*60+$s)*1000;
}