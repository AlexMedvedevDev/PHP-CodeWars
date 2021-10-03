INSTRUCTIONS
Find the total sum of internal angles (in degrees) in an n-sided simple polygon. 
N will be greater than 2.

<?php
function angle(int $n): int {
    return $n < 3 ? 0 : ($n-2) * 180;
}