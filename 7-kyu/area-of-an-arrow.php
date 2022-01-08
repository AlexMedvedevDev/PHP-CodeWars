INSTRUCTIONS
An arrow is formed in a rectangle with sides a and b by joining the bottom corners to the midpoint of the top edge and the centre of the rectangle.
arrow
a and b are integers and > 0
Write a function which returns the area of the arrow.

SOLUTIONS
<?php
function arrow_area(int $a, int $b): float {
    return ($a * $b) / 4;
}