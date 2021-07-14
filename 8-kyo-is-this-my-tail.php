INSTRUCTIONS
Some new animals have arrived at the zoo. 
The zoo keeper is concerned that perhaps the animals do not have the right tails. 
To help her, you must correct the broken function to make sure that the second argument (tail), 
is the same as the last letter of the first argument 
(body) - otherwise the tail wouldn't fit!
If the tail is right return true, else return false.
The arguments will always be strings, and normal letters.

SOLUTIONS
<?php 
// function equivalent($body, $char) {
//     $lastChar = substr($body, -1);
//     if ($lastChar == $char) {
//       return true;
//     } else {
//       return false;
//     }
//   }
function equivalent($body, $char) {
    return substr($body,-1)==$char;
}

// function equivalent($body, $char) {
//     return str_ends_with($body, $char);
// }

// function equivalent($body, $char): bool
// {
//     return (bool)preg_match("/[{$char}][[:>:]]/m", $body);
// }

?>