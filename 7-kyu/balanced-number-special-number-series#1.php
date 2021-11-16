INSTRUCTIONS
Task
Given a number, Find if it is Balanced or not .
Notes
If the number has an odd number of digits then there is only one middle digit, e.g. 92645 has middle digit 6; otherwise, there are two middle digits , e.g. 1301 has middle digits 3 and 0
The middle digit(s) should not be considered when determining whether a number is balanced or not, e.g 413023 is a balanced number because the left sum and right sum are both 5.
Number passed is always Positive .
Return the result as String

Input >> Output Examples
(balanced-num 7) ==> return "Balanced"
Explanation:
Since , The sum of all digits to the left of the middle digit (0)
and the sum of all digits to the right of the middle digit (0) are equal , then It's Balanced
(balanced-num 295591) ==> return "Not Balanced"
Explanation:
Since , The sum of all digits to the left of the middle digits (11)
and the sum of all digits to the right of the middle digits (10) are Not equal , then It's Not Balanced
Note : The middle digit(s) are 55 .
(balanced-num 959) ==> return "Balanced"
Explanation:
Since , The sum of all digits to the left of the middle digits (9)
and the sum of all digits to the right of the middle digits (9) are equal , then It's Balanced
Note : The middle digit is 5 .
(balanced-num 27102983) ==> return "Not Balanced"
Explanation:
Since , The sum of all digits to the left of the middle digits (10)
and the sum of all digits to the right of the middle digits (20) are Not equal , then It's Not Balanced
Note : The middle digit(s) are 02 .

SOLUTIONS
<?php
function balancedNum($num) {
    $take = intval((strlen($num) - 1) / 2);
    $leftsum = array_sum(str_split(substr($num, 0, $take)));
    $rightsum = array_sum(str_split(substr($num, -$take, $take)));
    if ($num < 10) { return "Balanced"; }
   return $leftsum == $rightsum ? "Balanced" : "Not Balanced";
}

// function balancedNum($num) {
//     $total = strlen($num);
//     $numCount = isEven($total) ? $total / 2 - 1 : ($total - 1) / 2;
//     $rightSum = substr($num, 0, $numCount);
//     $leftSum = substr($num, -$numCount, $numCount);
//         return sum($rightSum) === sum($leftSum) ? 'Balanced' : 'Not Balanced';
//   }  
//   function sum($num) {
//     return (int) array_reduce(str_split($num), function($carry, $item){
//       return $carry + $item;
//     }, 0);
//   }  
//   function isEven($num) {
//     return $num % 2 === 0;
// }

// function balancedNum($num) {
//     $num = str_split($num);
//     for($i=0;$i<(count($num)-(count($num)%2==0?2:1))/2;$i++){
//       $res += $num[$i];
//       $res_rev += array_reverse($num)[$i];
//     }
//     return $res == $res_rev ? "Balanced" : "Not Balanced";
// }