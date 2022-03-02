INSTRUCTIONS
Find the area of a rectangle when provided with one diagonal and one side of the rectangle. 
If the input diagonal is less than or equal to the length of the side, return "Not a rectangle". 
If the resultant area has decimals round it to two places.

SOLUTIONS
<?php
function area($d, $l) {
    if($d <= $l) {
      return "Not a rectangle";
    }
    $h = sqrt(pow($d, 2) - pow($l,2));
    return round($l*$h, 2);
}

// function area($d, $l) {
//     return $d>$l?round($l*sqrt($d**2-$l**2),2):'Not a rectangle';
// }