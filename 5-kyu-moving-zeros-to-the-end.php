INSTRUCTIONS
Write an algorithm that takes an array and moves all of the zeros to the end, 
preserving the order of the other elements.
moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]

SOLUTIONS
<?php
function moveZeros(array $items): array {
    $arrayOfOthers = [];
    $arrayOfZero = [];
      foreach ($items as $i) {
        if($i === 0 || $i === 0.0) {
          array_push($arrayOfZero, intval($i));
        } else {
          array_push($arrayOfOthers, $i);
        }
      }
      return [...$arrayOfOthers, ...$arrayOfZero];
}

// function moveZeros(array $items): array {
//     return array_pad(array_filter($items, function($x){return $x !== 0 and $x !== 0.0;}), count($items), 0);
// }

// function moveZeros(array $items): array
// {
//   $ret = array_diff($items,[0]);
//   return array_merge($ret,array_fill(0,count($items)-count($ret),0));
// }