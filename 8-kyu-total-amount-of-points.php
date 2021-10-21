INSTRUCTIONS
Our football team finished the championship. 
The result of each match look like "x:y". 
Results of all matches are recorded in the collection.
For example: ["3:1", "2:2", "0:1", ...]
Write a function that takes such collection and counts the points of our team in the championship. Rules for counting points for each match:
if x>y - 3 points
if x<y - 0 point
if x=y - 1 point
Notes:
there are 10 matches in the championship
0 <= x <= 4
0 <= y <= 4

SOLUTIONS
<?php
function points(array $games) {
    $result = 0;
      foreach ($games as $game) {
          $j = explode(':', $game);
          if ($j[0] > $j[1]) {
              $result+=3;
            }
          if ($j[0] == $j[1]) {
              $result += 1;
            }
        }
      return $result;
}

// function points(array $games): int {
//     return array_sum(array_map(function($e) {
//         list($x, $y) = explode(':', $e);
//         return $x > $y ? 3 : ($x < $y ? 0 : 1);
//       }, $games));
// }