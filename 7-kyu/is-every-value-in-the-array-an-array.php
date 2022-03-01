INSTRUCTIONS
Is every value in the array an array?
This should only test the second array dimension of the array. The values of the nested arrays don't have to be arrays.
Examples:
[[1], [2]] => true
["1", "2"] => false
[
  new class {
    public $one = 1;
  },
  new class {
    public $two = 2;
  }
] => false

SOLUTIONS
<?php
function arr_check(array $a): bool {
  foreach ($a as $i) {
    if(is_array($i) == false) {
      return false;
    }
  }
  return true;
}

// function arr_check(array $a): bool {
//     return count(array_filter($a, 'is_array')) == count($a);
// }

// function arr_check(array $a): bool {
//     return count(array_filter($a, function($o){ return gettype($o)!=='array'; }))==0;
// }