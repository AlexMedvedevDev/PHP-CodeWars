INSTRUCTIONS
Write a function reverse which reverses a list (or in clojure's case, any list-like data structure)

(the dedicated builtin(s) functionalities are deactivated)

SOLUTIONS
<?php
function reverse(array $a): array {
    $res = [];
    while($a) {
      $res[] = array_pop($a);
    }  
    return $res;
}

// function reverse(array $a): array {
//     $result = [];
//     foreach($a as $a_row){
//       array_unshift($result, $a_row); // array_unshift — Prepend one or more elements to the beginning of an array
//     }
//     return $result;
// }

// function reverse(array $a): array {
//     return ("array" . "_reverse")($a);
// }