INSTRUCTIONS
Mutation is a genetic operator used to maintain genetic diversity from one generation of a population of genetic algorithm chromosomes to the next.
Mutation
A mutation here may happen on zero or more positions in a chromosome. 
It is going to check every position and by a given probability it will decide if a mutation will occur.
A Mutation is the change from 0 to 1 or from 1 to 0.
Note: Some tests are random. 
If you think your algorithm is correct but the result fails, trying again should work.

SOLUTIONS
<?php
function mutate($chromosome, $p) {
    for ($i = 0; $i < strlen($chromosome) * $p; $i++) {
      $chromosome[$i] = $chromosome[$i] ? '0' : '1';
    }
    return $chromosome;
}

// function mutate($chromosome, $p) { // what the hell is this??
//     return implode(array_map(function($e) use ($p) { // reset — Set the internal pointer of an array to its first element
//         $r = reset(unpack("S", random_bytes(2))) / 65536; // unpack — Unpack data from binary string
//         return $r < $p ? (int)!$e : $e;
//       }, str_split($chromosome)));
// }

// function mutate($chromosome, $p) {
//     $percentage = $p * 100;
//     $arr_chromosome = str_split($chromosome);
//     foreach($arr_chromosome as &$value) {
//         if (mt_rand(1, 100) <= $percentage) {
//           if ((int)$value === 0) {
//             $value = 1;
//           } elseif((int)$value === 1) {
//             $value = 0;
//           }
//         }
//     }
//     return implode($arr_chromosome);
// }