INSTRUCTIONS
Your car is old, it breaks easily. The shock absorbers are gone and you think it can handle about 15 more bumps before it dies totally.

Unfortunately for you, your drive is very bumpy! Given a string showing either flat road ("_") or bumps ("n"), work out if you make it home safely. 
15 bumps or under, return "Woohoo!", over 15 bumps return "Car Dead".

SOLUTIONS
<?php
// function bump($x) {
//     $x = str_split($x, 1);
//     return count(array_keys($x, "n")) <= 15 ? "Woohoo!" : "Car Dead";
// }

function bump(string $x): string {
    return (substr_count($x, 'n') > 15)? 'Car Dead' : 'Woohoo!';
}

// function bump( string $x ) : string {
//     return substr_count( $x, "n" ) > 15 ? "Car Dead" : "Woohoo!";
// }

// function bump($x) {
//     return array_count_values(str_split($x))['n'] > 15 ? "Car Dead" : "Woohoo!";
// }