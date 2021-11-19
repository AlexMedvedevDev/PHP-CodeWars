INSTRUCTIONS
Definition
Strong number is the number that the sum of the factorial of its digits is equal to number itself.
For example: 145, since
1! + 4! + 5! = 1 + 24 + 120 = 145
So, 145 is a Strong number.

Task
Given a number, Find if it is Strong or not.
Notes
Number passed is always Positive.
Return the result as String
Input >> Output Examples
strong_num(1) ==> return "STRONG!!!!"
Explanation:
Since , the sum of its digits' factorial of (1) is equal to number itself (1) , Then its a Strong .

strong_num(123) ==> return "Not Strong !!"
Explanation:
Since the sum of its digits' factorial of 1! + 2! + 3! = 9 is not equal to number itself (123) , Then it's Not Strong .

strong_num(2)  ==>  return "STRONG!!!!"
Explanation:
Since the sum of its digits' factorial of 2! = 2 is equal to number itself (2) , Then its a Strong .

strong_num(150) ==> return "Not Strong !!"
Explanation:
Since the sum of its digits' factorial of 1! + 5! + 0! = 122 is not equal to number itself (150), Then it's Not Strong .

SOLUTIONS
<?php
function strong($n) : string {
    $res = 0;
    foreach (str_split($n) as $val) {
      $res += $val == 0 ? 1 : array_product(range(1, $val));
    }
    return $res == $n ? "STRONG!!!!" : "Not Strong !!";
}

// function strong($n) {
//     $str = str_split($n);
//     $sum=0;
//     foreach($str as $val){
//       $f=1;
//       for($i=1;$i<=$val;$i++){
//         $f*=$i;
//       }
//       $sum+=$f;
//     }
//     if($sum==$n)return "STRONG!!!!";
//     else return "Not Strong !!"; 
// }

// function strong($n) {
//     $sum= array_sum( array_map(function($x){ return ($x==0)?1:array_product(range(1,(int)$x));} , str_split(strval($n)) ) );
//     return ($sum==$n) ? "STRONG!!!!" : "Not Strong !!";
// }

// function strong($n) {
//     return array_sum(array_map(function($item){
//       return $item != 0 ? array_product(range(1, $item)) : 1;
//     }, str_split($n))) == $n ? 'STRONG!!!!' : 'Not Strong !!';
// }