INSTRUCTIONS
Your task is to return how many times a string contains a given character.
The function takes a string(inputS) as a parameter and a char(charS) which is the character that you will have to find and count.
For example, if you get an input string "Hello world" and the character to find is "o", return 2.

SOLUTIONS
<?php
function stringCounter($input,$char){
    $res = [];
    foreach(str_split($input) as $i) {
      if($i === $char) {
        array_push($res, $i);
      }
    }
    return count($res);
}

// function stringCounter($inputS,$charS){ 
//     return substr_count($inputS,$charS);
// }