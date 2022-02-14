INSTRUCTIONS
hould be easy, begin by looking at the code. Debug the code and the functions should work.
There are three functions: Multiplication (x) Addition (+) and Reverse (!esreveR)

SOLUTIONS
<?php
function multi($array) {
    return array_product($array);
}
  function add($array) {
    return array_sum($array);
}
  function reverse($string) {
    return strrev($string);
}

// use function array_product as multi;
// use function array_sum as add;
// use function strrev as reverse;