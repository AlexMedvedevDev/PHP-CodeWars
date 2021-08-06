INSTRUCTIONS
Task
Write a function that accepts fight string consists of only small letters and return who wins the fight. When the left side wins return Left side wins!, when the right side wins return Right side wins!, in other case return Let's fight again!.

The left side letters and their power:

 w - 4
 p - 3
 b - 2
 s - 1
The right side letters and their power:

 m - 4
 q - 3
 d - 2
 z - 1
The other letters don't have power and are only victims.

Example
AlphabetWar("z");        //=> Right side wins!
AlphabetWar("zdqmwpbs"); //=> Let's fight again!
AlphabetWar("zzzzs");    //=> Right side wins!
AlphabetWar("wwwwwwz");  //=> Left side wins!

SOLUTIONS
<?php
function alphabetWar($fight)
{
  $sum = array_sum(
  preg_replace(['/[w]/','/[p]/','/[b]/','/[s]/','/[m]/','/[q]/','/[d]/','/[z]/'],[4,3,2,1,-4,-3,-2,-1], str_split($fight))
    );
     return $sum == 0 ? "Let's fight again!" : ($sum > 0 ? "Left side wins!" : "Right side wins!");
}

// unction alphabetWar( string $fight ) : string {

//     // vars
//     $leftScore = $rightScore = 0;
//     $alphabets_left  = [ "w" => 4, "p" => 3, "b" => 2, "s" => 1,  ];
//     $alphabets_right = [ "m" => 4, "q" => 3, "d" => 2, "z" => 1,  ];

//     // loop through each letter of the string
//     for ( $i = 0; $i < strlen( $fight ) ; $i++ ) {

//         // check if letter belong to left side
//         if ( key_exists( $fight[$i], $alphabets_left ) )

//             // if true, add its value to left score
//             $leftScore += $alphabets_left[ $fight[$i] ];

//         // check if letter belong to right side
//         if ( key_exists( $fight[$i], $alphabets_right ) )

//             // if true, add its value to right score
//             $rightScore += $alphabets_right[ $fight[$i] ];
        
//     }

//     // if right score greater than left
//     if ( $rightScore > $leftScore )

//         // return right side flag
//         return "Right side wins!";
    
//     // if right score less than left
//     if ( $rightScore < $leftScore )

//         // return left side flag
//         return "Left side wins!";
    
//     // otherwise, let's fight!
//     return "Let's fight again!";
// }

// function alphabetWar($fight) {
//     $right_side = array_sum(str_split(strtr($fight,["m"=>4, "q"=>3, "d"=>2, "z"=>1])));
//     $left_side = array_sum(str_split(strtr($fight, ["w"=>4, "p"=>3, "b"=>2, "s"=>1])));
    
//     return ($right_side > $left_side) ? "Right side wins!" : ($left_side > $right_side ? "Left side wins!" : "Let's fight again!");
// }

// function getScore($l) {
//     $thisIsWar = array('w'=>4, 'p'=>3, 'b'=>2, 's'=>1, 'm'=>-4, 'q'=>-3, 'd'=>-2, 'z'=>-1);
//     return array_key_exists($l, $thisIsWar) ? $thisIsWar[$l] : 0;
//   }
  
//   function alphabetWar($fight) {
//     $result = array_sum(array_map('getScore', str_split($fight)));
//     if ($result < 0) { return "Right side wins!"; }
//     return $result > 0 ?  "Left side wins!" : "Let's fight again!";
// }