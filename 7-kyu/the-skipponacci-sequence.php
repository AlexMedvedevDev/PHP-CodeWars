INSTRUCTIONS
Your task is to generate the Fibonacci sequence to n places, with each alternating value as "skip". For example:
"1 skip 2 skip 5 skip 13 skip 34"
Return the result as a string
You can presume that n is always a positive integer between (and including) 1 and 64.

SOLUTIONS
<?php
function skiponacci($n) {
    for ($i = 0; $i < $n; $i++) {
      if ($i < 2) $arr[$i] = 1;
      else $arr[$i] = $arr[$i - 1] + $arr[$i -2];
    }
    foreach($arr as $k => $v) {
      $a[] = $k % 2 == 0 ? $v : 'skip';
    }
    return implode(' ', $a);
}

// function skiponacci($n) {
//     $res = [];
//     for ($i = 0; $i < $n; $i++) {
//       if ($i < 2)
//         $res[$i] = 1;
//       else
//         $res[$i] = $res[$i-1] + $res[$i-2];
//     }
//     foreach ($res as $k => &$v)
//       $v = (($k % 2) == 0) ? $v : 'skip';
//     return implode(' ', $res);
// }