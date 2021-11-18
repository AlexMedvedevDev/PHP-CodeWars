INSTRUCTIONS
Input >> Output Examples
disariumNumber(89) ==> return "Disarium !!"
Explanation:
Since , 81 + 92 = 89 , thus output is "Disarium !!"
disariumNumber(564) ==> return "Not !!"
Explanation:
Since , 51 + 62 + 43 = 105 != 564 , thus output is "Not !!"

SOLUTIONS
<?php
function disariumNumber($n) {
    return array_sum(array_map("pow", str_split($n), range(1, strlen($n)))) === $n ? "Disarium !!" : "Not !!";
}

// function disariumNumber($n) {
//     $res = 0;
//     foreach (str_split((string)$n) as $k => $v) {
//       $res += $v ** ($k + 1); 
//     }
//     return $res == $n ? "Disarium !!" : "Not !!";
// }

// function disariumNumber($n) {
//     $n="$n"; $t=0;
//     for($s=0;$s<strlen($n);$s++)
//       $t+=pow($n[$s], $s+1);
//     return $n==$t ? "Disarium !!" : "Not !!";
// }