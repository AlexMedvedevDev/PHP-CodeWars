INSTRUCTIONS
You've been collecting change all day, and it's starting to pile up in your pocket, but you're too lazy to see how much you've found.
Good thing you can code!
Create change_count() to return a dollar amount of how much change you have!
Valid types of change include:
penny: 0.01
nickel: 0.05
dime: 0.10
quarter: 0.25
dollar: 1.00
These amounts are already preloaded as floats into the CHANGE (a constant) associative array for you to use!
You should return the total in the format $x.xx.
Examples:
changeCount('nickel penny dime dollar') == '$1.16'
changeCount('dollar dollar quarter dime dime') == '$2.45'
changeCount('penny') == '$0.01'
changeCount('dime') == '$0.10'

SOLUTIONS
<?php
function changeCount($change) {
    return sprintf("$%1.2f", array_sum(array_map(function($e) { // sprintf — Return a formatted string
      return CHANGE[$e];
    }, explode(" ", $change))));
}

// function changeCount($change) {
//     return '$'.number_format(eval('return '.str_replace(['penny', 'nickel', 'dime', 'quarter', 'dollar',' '],[0.01, 0.05, 0.10, 0.25, 1.00, '+'],$change).';'), 2);
// }