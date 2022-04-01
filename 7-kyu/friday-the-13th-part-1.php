INSTRUCTIONS
It's Friday the 13th, and Jason is ready for his first killing spree!
Create a function, killcount, that accepts two arguments: an array of array pairs (the conselor's name and intelligence - ["Chad", 2]) and an integer representing Jason's intellegence.

PHP:
$counselors = [["Chad", 2], ["Tommy", 9]];
$jason = 7;
Your function must return an array of the names of all the counselors who can be outsmarted and killed by Jason.

SOLUTIONS
<?php
function killcount($counselors, $jason){
    $res = [];
    foreach($counselors as $i) {
      if($i[1] < $jason) {
        array_push($res, $i[0]);
      }
    }
    return $res;
}

// function killcount($counselors, $jason){
//     return array_column(array_filter($counselors, 
//       function($c) use ($jason) { return $c[1] < $jason; }), 0);
// }

// function killcount($counselors, $jason){
//     $result = [];
//     foreach ($counselors as $person) {
//       $person[1] < $jason and $result[] = $person[0];
//     }
//     return $result;
// }