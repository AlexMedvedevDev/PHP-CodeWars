INSTRUCTIONS
Finding your seat on a plane is never fun, particularly for a long haul flight... 
You arrive, realise again just how little leg room you get, and sort of climb into the seat covered in a pile of your own stuff.
To help confuse matters (although they claim in an effort to do the opposite) many airlines omit the letters 'I' and 'J' from their seat naming system.
tHe naming system consists of a number (in this case between 1-60) that denotes the section of the plane where the seat is (1-20 = front, 21-40 = middle, 40+ = back). 
This number is followed by a letter, A-K with the exclusions mentioned above.
Letters A-C denote seats on the left cluster, D-F the middle and G-K the right.
Given a seat number, your task is to return the seat location in the following format:
'2B' would return 'Front-Left'.
If the number is over 60, or the letter is not valid, return 'No Seat!!'
SOLUTIONS

<?php 
function planeSeat($a){  
    $matched = preg_match("/^([1-9]|[1-5]\d|60)([A-HK])$/", $a, $matches);
    if(!$matches) {
      return 'No Seat!!';
    }
    $x = $matches[1] <= 20 ? "Front" : ($matches[1] <= 40 ? "Middle" : "Back");
    $y = $matches[2] <= "C" ? "Left" : ($matches[2] <= "F" ? "Middle" : "Right");
    return "$x-$y";
}

// function planeSeat($a) {
//     preg_match('/([0-9]+)([A-Z]+)/', $a, $m);
//     list($r, $c) = [$m[1], $m[2]];
//     if ($r > 60 or !preg_match("/$c/", "ABCDEFGHK"))
//       return 'No Seat!!';
//     return ($r <= 20 ? "Front-" : ($r <= 40 ? "Middle-" : "Back-"))
//          . (preg_match("/$c/", "ABC") ? "Left" : (preg_match("/$c/", "DEF") ? "Middle" : "Right"));
// }