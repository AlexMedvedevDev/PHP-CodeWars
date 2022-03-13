INSTRUCIIONS
!false = true
!!false = false
Your task is to complete the function 'negationValue()' that takes a string of negations with a value and returns what the value would be if those negations were applied to it.
negationValue("!", false); //=> true
negationValue("!!!!!", true); //=> false
negationValue("!!", []); //=> false
Do not use the eval() function or the Function() constructor in JavaScript.

SOLUTIONS
<?php
function negationValue($str, $val) {
    return (strlen($str) % 2) ? !$val : !!$val;
}

// function negationValue($str, $val) {
//     $b = $val ? 1 : 0;
//     return substr_count($str,"!")%2==0 ? $b : !$b;
// }

// function negationValue($str, $val) {
//     if(strlen($str)%2!=0 && $val==false){
//      return true;
//    }elseif(strlen($str)%2==0 && $val==false){
//      return false;
//    }elseif(strlen($str)%2!=0 && $val==true){
//      return false;
//    }elseif(strlen($str)%2==0 && $val==true){
//      return true;
//    }
// }

// function negationValue($str, $val) {
//     $result = $val;
//     for ($i = 0; $i < strlen($str); $i++) {
//       $result = !$result;
//     }
//     return $result;
// }