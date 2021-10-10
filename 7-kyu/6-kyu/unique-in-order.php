INSTRICTIONS
Implement the function unique_in_order which takes as argument a sequence 
and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

For example:
uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
uniqueInOrder([1,2,2,3,3])       == {1,2,3}

SOLUTIONS 
<?php
function uniqueInOrder($values) {
    $unique = [];
        if (is_string($values)) {
      $values = str_split($values, 1);
    }    
    for ($i = 0; $i < count($values); $i++) {
      if ($values[$i] != $values[$i + 1]) {
        $unique[$i] = $values[$i];
      }
    }
    return array_values($unique);
}

// function uniqueInOrder($iterable){ 
//     $arr = is_string($iterable) ? str_split($iterable) : $iterable;
//     $ret = array_reduce($arr, function($carry, $item) {
//       if ($item != end($carry)) {
//         $carry[] = $item;
//       }
//       return $carry;
//     }, []);
//     return $ret;
// }