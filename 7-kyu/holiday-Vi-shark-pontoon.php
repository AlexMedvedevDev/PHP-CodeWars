INSTRUCTIONS
Your friend invites you out to a cool floating pontoon around 1km off the beach. 
Among other things, the pontoon has a huge slide that drops you out right into the ocean, a small way from a set of stairs used to climb out.
As you plunge out of the slide into the water, you see a shark hovering in the darkness under the pontoon... Crap!
You need to work out if the shark will get to you before you can get to the pontoon. 
To make it easier... as you do the mental calculations in the water you either freeze when you realise you are dead, or swim when you realise you can make it!

You are given 5 variables:
sharkDistance = distance from the shark to the pontoon. The shark will eat you if it reaches you before you escape to the pontoon.
sharkSpeed = how fast it can move in metres/second.
pontoonDistance = how far you need to swim to safety in metres.
youSpeed = how fast you can swim in metres/second.
dolphin = a boolean, if true, you can half the swimming speed of the shark as the dolphin will attack it.

The pontoon, you, and the shark are all aligned in one dimension.

SOLUTIONS
<?php
// function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string {
//     if ($dolphin == true) {
//       $sharkSpeed = $sharkSpeed  / 2;  
//     } 
//       return $pontoonDistance / $youSpeed < $sharkDistance / $sharkSpeed ? "Alive!" : "Shark Bait!"; 
// }

// function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string {
//     if ($dolphin) {
//       $sharkSpeed *= 0.5;
//     }
//     $sharkPathTime = $sharkDistance / $sharkSpeed;
//     $youPathTime = $pontoonDistance / $youSpeed;
//     return $youPathTime < $sharkPathTime ? 'Alive!' : 'Shark Bait!';
// }

function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string {
    return ($pontoonDistance/$youSpeed <= $sharkDistance/($dolphin ? $sharkSpeed/2 : $sharkSpeed)) ? "Alive!" : "Shark Bait!";
}

// function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string {
//     return ($pontoonDistance/$youSpeed) < ( $sharkDistance/($sharkSpeed*($dolphin ? 0.5:1)) ) ? 'Alive!' : 'Shark Bait!';
// }