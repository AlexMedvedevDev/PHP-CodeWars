INSTRUCTIONS
Area of an annulus
When given the length of the arrow as a, where a is an integer and ≥ 1, calculate the area of the annulus (the grey ring).
annulus
Round the answer to two decimal places. 
In case you need pi, you can use the standard Math.PI/M_PI.

SOLUTIONS
<?php
function annulus_area(int $a): float {
    return round(pi()*$a*$a/4.0, 2);
}

// function annulus_area(int $a): float {
//     return sprintf("%.2f", pow($a / 2, 2) * M_PI);
// }

// function annulus_area( int $a ) : float {
//     return round( M_PI * ( $a/2 )**2, 2 );
// }

// function annulus_area(int $a): float {
//     return floatval(number_format($a*$a*M_PI/4,2,'.',''));
// }