INSTRUCTIONS
Implement a function which filters out array values which satisfy the given predicate.
reject([1, 2, 3, 4, 5, 6], function ($n) {return $n % 2 == 0;})  =>  [1, 3, 5]

SOLUTIONS
<?php
function reject($array, $predicate) {
    return array_values(array_filter($array, function($i) use ($predicate) { return !$predicate($i);}));
}

// function reject($array, $predicate) {
//     return array_values(array_diff_assoc($array,array_filter($array, $predicate)));
// }

// function reject($array, $iterator) {
//     $res = array();
//     foreach ($array as $v) {
//       if (!$iterator($v))
//         $res[] = $v;
//     }
//     return $res;
// }