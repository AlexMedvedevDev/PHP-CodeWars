INSTRUCTIONS
Celebrities love to call their children quirky names. 
The latest trend for baby names is the 'last letter trend'. 
The rules of the trend are as follows: the first letter of a child's name should be the same as the last letter of their older sibling. 
For example:
Suri (1st child), Ireland (2nd child), Diva (3rd child), Aleph (4th child)
And so on...
Create a function validName which accepts an array of names. It should return "Congratulations, your baby names are compatible!" if all of the names follow the rule. 
It should return "Back to the drawing board, your baby names are not compatible." if all of the names do not follow the rule.
If a couple only has one child return "Congratulations, you can choose any name you like!"
If the array is empty return "You must test at least one name."
Notes:
Names may be hyphenated or two words e.g. Blue Ivy or Jean-Paul
Names will not include any other characters apart from letters, hyphens or spaces.

SOLUTIONS
<?php
function valid_name($array) {
    if(count($array) == 0) return "You must test at least one name.";
    if(count($array) == 1) return "Congratulations, you can choose any name you like!";
    for($i = 0; $i < count($array) - 1; $i++) {
      if (strtoupper($array[$i][strlen($array[$i]) - 1]) !== $array[$i + 1][0]) return "Back to the drawing board, your baby names are not compatible."; 
    }
    return "Congratulations, your baby names are compatible!";
}

// function valid_name($array) {
//     if (empty($array)) {
//       return 'You must test at least one name.';
//     }
//     if (1 == count($array)) {
//       return 'Congratulations, you can choose any name you like!';
//     }
//     foreach ($array as $key => $name) {
//       if (!isset($array[$key + 1])) {
//         return 'Congratulations, your baby names are compatible!';
//       }
//       if (strcasecmp(substr($name, -1), substr($array[$key + 1], 0, 1))) {
//         return 'Back to the drawing board, your baby names are not compatible.';
//       }
//     }
// }