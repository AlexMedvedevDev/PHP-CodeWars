INSTRUCTIONS
Write a function filterLucky/filter_lucky() that accepts a list of integers and filters the list to only include the elements that contain the digit 7.
For example,
ghci> filterLucky [1,2,3,4,5,6,7,68,69,70,15,17]
[7,70,17]
Don't worry about bad input, you will always receive a finite list of integers.

SOLUTIONS
<?php
function filter_lucky(array $a): array {
    return array_values(preg_grep('/7/', $a)); // preg_grep — Return array entries that match the pattern 
}

// function filter_lucky(array $a): array {
//     return array_values(array_filter($a,function($x){return strpos($x,'7')!==false;}));
// }

// function filter_lucky(array $a){
//     $res = [];
//     foreach($a as $v){
//       $str = "$v";
//       if(preg_match('~7~', $str)){
//         $res[] = $v; 
//       }
//     }
//     return $res;
// }
