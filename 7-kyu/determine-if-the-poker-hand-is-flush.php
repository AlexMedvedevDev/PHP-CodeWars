INSTRUCTIONS
Determine if the poker hand is flush, meaning if the five cards are of the same suit.
Your function will be passed a list/array of 5 strings, 
each representing a poker card in the format "5H" (5 of hearts), 
meaning the value of the card followed by the initial of its suit (Hearts, Spades, Diamonds or Clubs). 
No jokers included.
Your function should return true if the hand is a flush, false otherwise.
The possible card values are 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A
Examples
["AS", "3S", "9S", "KS", "4S"]  ==> true
["AD", "4S", "7H", "KS", "10S"] ==> false

SOLUTIONS
<?php
function checkIfFlush($cards)
{
  $suit = substr($cards[0], -1);
  return substr_count(implode($cards), $suit) === 5;
}

// function checkIfFlush($cards)
// {
//   return count(array_count_values(array_map(function ($a) {
//       return substr($a, -1);
//   }, $cards))) > 1 ? false : true;
// }

// function checkIfFlush(array $cards)
// {
//   $suit = substr($cards[0], -1);
//   foreach($cards as $card)
//     if(substr($card, -1) !== $suit) return false;
//   return true;
// }

// function checkIfFlush($cards)
// {
//   foreach ($cards as &$value) {
//     $value = ltrim($value, '0123456789JQKA');
//   }
//   return 1==count(array_unique($cards));
// }