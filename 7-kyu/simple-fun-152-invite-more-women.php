INSTRUCTIONS
King Arthur and his knights are having a New Years party. 
Last year Lancelot was jealous of Arthur, because Arthur had a date and Lancelot did not, and they started a duel.
To prevent this from happening again, Arthur wants to make sure that there are at least as many women as men at this year's party. 
He gave you a list of integers of all the party goers.
Arthur needs you to return true if he needs to invite more women or false if he is all set.

Input/Output
[input] integer array L ($a in PHP)
An array (guaranteed non-associative in PHP) representing the genders of the attendees, where -1 represents women and 1 represents men.
2 <= L.length <= 50
[output] a boolean value
true if Arthur need to invite more women, false otherwise.

SOLUTIONS
<?php
function invite_more_women(array $a): bool {
    return array_sum($a) > 0 ? true : false;
}

// function invite_more_women(array $a): bool {
//     return (array_sum($a) > 0);
// }

// function invite_more_women(array $a): bool {
//     $a = array_count_values($a);
//     return $a[-1] >= $a[1] ? false : true;
// }

// function invite_more_women(array $a): bool {
//     return count(array_filter($a, function ($p) {return $p === 1;})) > count(array_filter($a, function ($p) {return $p === -1;}));
// }

// function invite_more_women(array $a): bool {
//     if (count(array_filter($a,"test"))>count($a)/2) {
//       return true;
//     } else {
//       return false;
//     }
//   }
//     function test($var)
//         {
//             return($var == 1);
//         }