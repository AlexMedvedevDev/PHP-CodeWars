INSTRUCTIONS
Create a function that returns the total of a meal including tip and tax. 
You should not tip on the tax.
You will be given the subtotal, the tax as a percentage and the tip as a percentage. 
Please round your result to two decimal places.

SOLUTIONS
<?php
function calculate_total(float $subtotal, float $tax, float $tip): float {
    return round(($subtotal+($subtotal*$tax/100)+($subtotal*$tip/100)), 2);
}

// function calculate_total(float $subtotal, float $tax, float $tip): float {
//     return number_format($subtotal + ($subtotal/100 * ( $tax + $tip )), 2);
// }

// function calculate_total(float $subtotal, float $tax, float $tip): float {
//     $total = 0;
//     $total = $subtotal + $subtotal * $tax / 100;
//     $total += $subtotal * $tip / 100;
//     return round($total,2);
// }