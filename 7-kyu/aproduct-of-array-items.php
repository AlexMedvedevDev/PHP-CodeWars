INSTRUCTIONS
Calculate the product of all elements in an array.
If the array is NULL or empty, return NULL.

SOLUTIONS
<?php
function product($a) {
    return $a == NULL ? NULL : array_product($a);
}

// function product($a) {
//     return empty($a) ? NULL : array_product($a);
// }

// function product($a) {
//     return $a ? array_product($a) : NULL;
// }

// function product($a) {
//     if ($a != NULL) {
//     return array_product($a);
//     } else {
//     return NULL;
//     }
// }

// function product($a) {
//     return is_null($a) || count($a) === 0 ? NULL : array_product($a);
// }

// function product($a) {
//     if(!isset($a) || empty($a)) return null;
    
//     return array_product($a);
// }