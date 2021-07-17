INSTRUCTIONS
Write a function to convert a name into initials.
This kata strictly takes two words with one space in between them.
The output should be two capital letters with a dot separating them.

It should look like this:
Sam Harris => S.H

SOLUTION
<?php
// function abbrevName($name) {
//     $arr = explode(" ", $name);
//     $acronym = "";
//     foreach ($arr as $w) {
//       $acronym .= $w[0];
//       }
    
//     $res = implode(".", str_split($acronym)); 
//     return strtoupper($res);
// }

// function abbrevName($name)
// {
//   $abbreviate = "";
//   $wrds = explode(" ", $name);
//   $abbreviate .= strtoupper($wrds[0][0]) . "." . strtoupper($wrds[1][0]);
//   return $abbreviate;
// }

// function abbrevName($name)
// {
//   preg_match_all('/\b\w/', $name, $name);
//   return strtoupper(join('.',$name[0]));
// }

function abbrevName($name){
    $name2=strstr($name," ");
    return strtoupper($name[0]).'.'.strtoupper($name2[1]);

}



