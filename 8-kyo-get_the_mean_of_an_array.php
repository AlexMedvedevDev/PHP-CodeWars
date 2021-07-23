<!-- Instructions
It's the academic year's end, fateful moment of your school report.
The averages must be calculated. All the students come to you and entreat you to calculate their average for them.
Easy ! You just need to write a script.
Return the average of the given array rounded down to its nearest integer.
The array will never be empty. -->

// Solutions
<?php
function get_average($a) {
  return floor(array_sum($a) / sizeof($a));
}
