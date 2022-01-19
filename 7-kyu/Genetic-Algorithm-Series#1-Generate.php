INSTRUCTIONS
A genetic algorithm is based in groups of chromosomes, called populations. 
To start our population of chromosomes we need to generate random binary strings with a specified length.
In this kata you have to implement a function generate that receives a length and has to return a random binary strign with length characters.
Example:
Generate a chromosome with length of 4 generate(4) could return the chromosome 0010, 1110, 1111... or any of 2^4 possibilities.
Note: Some tests are random. If you think your algorithm is correct but the result fails, trying again should work.

SOLUTIONS
<?php
function generate($length) {
    $res = "";
    for ($i = 0; $i < $length; ++$i) {
      $res .= mt_rand(0,1);
    }
    return $res; 
}

// function generate($length) {
//     $population = '';
//     for ($i = 0; $i < $length; $i++) {
//       $population .= rand(0, 1);
//     }
//     return $population;
// }

// function generate($length) {
//     return implode('', array_map(function() {
//       return mt_rand(0, 1);
//     },range(1, $length)));
// }