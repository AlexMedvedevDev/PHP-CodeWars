INSTRUCTIONS
Given a non-empty array of integers, return the result of multiplying the values together in order. Example:

[1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24

SOLUTIONS
<?php
function grow($a) {
    return array_product($a);
}

// function multiply($x, $y){
//     return $x * $y;
// }
// function grow($a) {
//     return array_reduce($a, 'multiply', 1);
// }

// function grow($a) {
//     $r = 1;
//     foreach ($a as $k => $v) { $r *= $v; }
//     return $r;
// }

// use function array_product as grow;

// function grow($a) {
//     $proizvod=1;
//    for ($i=0; $i < count($a) ; $proizvod*=$a[$i++]) {}
//  return $proizvod;
//  }
