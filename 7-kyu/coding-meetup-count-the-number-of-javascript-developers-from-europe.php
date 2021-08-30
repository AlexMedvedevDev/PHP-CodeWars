INSTRUCTIONS
You will be given an array of objects (hashes in ruby) representing data about developers who have signed up to attend the coding meetup that you are organising for the first time.
Your task is to return the number of JavaScript developers coming from Europe.

SOLUTIONS
<?php 
// function count_developers($a) {
//     $filtered = 0;
//       foreach($a as $developer) {
//           if ($developer['language'] == 'JavaScript' && ($developer['continent'] == 'Europe')) {
//               $filtered++;
//           }
//        }
//      return $filtered;
// }

function count_developers(array $a): int {
    return count(array_filter($a, function ($e) {return $e['continent'] === "Europe" && $e['language'] === "JavaScript";}));
}

// function count_developers($a) {
//     return array_reduce($a, function($a, $c){
//       return $a + ($c['continent']=='Europe' && $c['language']=='JavaScript');
//     }, 0);
// }