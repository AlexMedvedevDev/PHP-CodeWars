INSTRUCTIONS
To celebrate today's launch of my Hero's new book: Alan Partridge: Nomad, We have a new series of kata arranged around the great man himself.
Given an array of terms, if any of those terms relate to Alan Partridge, return Mine's a Pint!
The number of ! after the t should be determined by the number of Alan related terms you find in the provided array (x). The related terms are:
Partridge
PearTree
Chat
Dan
Toblerone
Lynn
AlphaPapa
Nomad
If you don't find any related terms, return 'Lynn, I've pierced my foot on a spike!!'
All Hail King Partridge

SOLUTIONS
<?php
function part(array $a): string {
    $terms = ['Partridge', 'PearTree', 'Chat', 'Dan', 'Toblerone', 'Lynn', 'AlphaPapa', 'Nomad'];
    $count = count(array_intersect($a, $terms));
    return $count ? "Mine's a Pint" . str_repeat("!", $count) : "Lynn, I've pierced my foot on a spike!!";
}

// function part( array $a ) : string {
//     $list = [ 'Partridge', 'PearTree', 'Chat', 'Dan', 'Toblerone', 'Lynn', 'AlphaPapa', 'Nomad' ];
//     for ( $i = $g = 0; $i < count( $a ); $i++ )
//         if ( in_array( $a[$i], $list ) )
//             ++$g;
//     return $g ? 'Mine\'s a Pint' . str_repeat( "!", $g ) : 'Lynn, I\'ve pierced my foot on a spike!!';
// }

