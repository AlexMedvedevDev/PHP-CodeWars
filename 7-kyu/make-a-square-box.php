INSTRUCTIONS
Easy; Make a box
Given a number as a parameter (between 2 and 30), return an array containing strings which form a box.
Like this:
n = 5
[
  '-----',
  '-   -',
  '-   -',
  '-   -',
  '-----'
]
n = 3
[
  '---',
  '- -',
  '---'
]

SOLUTIONS
<?php
function box(int $n): array {
    $str = '-';
    $array = array(str_repeat($str, $n));
    for($i = 1; $i < $n; $i++){
      $array[] = $str.(str_repeat(' ', $n - 2)).$str;
    }
    $array[$n - 1] = (str_repeat($str, $n));
    return $array;
}

// function box($n) {
//     $box = [];
//     for($r=1;$r<=$n;$r++){
      
//       if($r==1 || $r==$n)
//         $box[]=str_repeat('-',$n);
//       else
//         $box[]='-'.str_repeat(' ',$n-2).'-';
//     }
//     return $box;
// }

// function box(int $n): array {
//     $char = "-";
//     $box = [ str_repeat($char, $n) ];
//     $box = $n > 2 ? array_merge($box, 
//       array_fill(0, $n - 2, $char . str_repeat(" ", $n - 2) . $char)) : $box;
//     $box[$n - 1] = str_repeat($char, $n);
//     return $box;
// }