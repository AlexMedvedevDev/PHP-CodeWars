INSTRUCTIONS
Complete the solution so that it returns a formatted string. The return value should equal "Value is VALUE" where value is a 5 digit padded number.
Example:
solution(5); // should return "Value is 00005"

SOLUTIONS
<?php 
// function solution($value){
//     $value = str_pad($value, 5, 0, STR_PAD_LEFT);
//     return "Value is $value";
// }

function solution($value){
    return sprintf("Value is %05d",$value);
};

// function solution($value){
//     return "Value is ".str_repeat("0",5-strlen($value)).$value;
// };