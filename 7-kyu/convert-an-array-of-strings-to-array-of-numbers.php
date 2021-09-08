INSTRUCTIONS
Oh no!
Some really funny web dev gave you a sequence of numbers from his API response as an sequence of strings!
You need to cast the whole array to the correct type.
Create the function that takes as a parameter a sequence of numbers represented as strings and outputs a sequence of numbers.
ie:["1", "2", "3"] to [1, 2, 3]
Note that you can receive floats as well.

SOLUTIONS
<?php 
function toNumberArray(array $stringArray) {
    return array_map('floatval', $stringArray);
}

// function toNumberArray(array $array) : array {
//     array_walk($array, function (&$item) {
//       $item = +$item;
//     });
//     return $array;
// }

// function toNumberArray(array $stringArray) : array {
//     return array_map(function($num) { return (float) $num; }, $stringArray);
// }