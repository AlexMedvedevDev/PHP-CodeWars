INSTRUCTIONS
Beaches are filled with sand, water, fish, and sun. Given a string, calculate how many times the words "Sand", "Water", "Fish", and "Sun" appear without overlapping (regardless of the case).

Examples
sumOfABeach("WAtErSlIde")                    ==>  1
sumOfABeach("GolDeNSanDyWateRyBeaChSuNN")    ==>  3
sumOfABeach("gOfIshsunesunFiSh")             ==>  4
sumOfABeach("cItYTowNcARShoW")               ==>  0

SOLUTIONS
<?php
function sumOfABeach($beach) {
    return preg_match_all('/(sand|water|fish|sun)/i', $beach);
}

// function sumOfABeach($beach) {
//     $a = strtolower ($beach);
//       $b = substr_count($a,"sand");
//       $c = substr_count($a,"water");
//         $d = substr_count($a,"fish");
//         $e = substr_count($a,"sun");
//       return $b + $c + $d + $e;
// }