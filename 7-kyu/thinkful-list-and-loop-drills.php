INSTRUCTIONS
write a function inverse_slice() that takes three arguments: a list items, an integer a and an integer b. 
The function should return a new list with the slice specified by items[a:b] excluded. For example:

>>>inverse_slice([12, 14, 63, 72, 55, 24], 2, 4)
[12, 14, 55, 24]
The input will always be a valid list, a and b will always be different integers equal to or greater than zero, but they may be zero or be larger than the length of the list.

SOLUTIONS
<?php 
function inverse_slice(array $items, int $a, int $b): array {
    return array_merge((array_slice($items, 0, $a)),(array_slice($items, $b)));
}

// function inverse_slice(array $items, int $a, int $b): array {
//     $c = $b - $a;
//     array_splice($items,$a,$c);
//     return $items;
// }

// function inverse_slice(array $items, int $a, int $b): array {
//     array_splice($items,$a,$b-$a);
//     return $items;
// }