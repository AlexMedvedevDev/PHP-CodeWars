INSTRUCTIONS
In some ranking people collects points. The challenge is sort by points and calulate position for every person. But remember if two or more persons have same number of points, they should have same position number and sorted by name (name is unique).

For example: Input structure:

[
  [
    "name" => "John",
    "points" => 100,
  ],
  [
    "name" => "Bob",
    "points" => 130,
  ],
  [
    "name" => "Mary",
    "points" => 120,
  ],
  [
    "name" => "Kate",
    "points" => 120,
  ],
]
Output should be:

[
  [
    "name" => "Bob",
    "points" => 130,
    "position" => 1,
  ],
  [
    "name" => "Kate",
    "points" => 120,
    "position" => 2,
  ],
  [
    "name" => "Mary",
    "points" => 120,
    "position" => 2,
  ],
  [
    "name" => "John",
    "points" => 100,
    "position" => 4,
  ],
]

SOLUTIONS
<?php
function ranking($people) {
    array_multisort(array_column($people, 'points'), SORT_DESC, array_column($people, 'name'), SORT_ASC, $people);
    foreach($people as $key => &$person) {
      $person = $person + ['position' => ($people[$key - 1]['points'] ?? -1) === $person['points'] ? $people[$key - 1]['position'] : $key + 1];
    }
    return $people; 
}

// function ranking($people) {
//     if(count($people) == 0) return [];
//     usort($people, function($a, $b){
//       return ($a['points'] == $b['points']) ? $a['name'] > $b['name'] : $a['points'] < $b['points'];
//     });
//     $people[0]['position'] = 1;
//     for ($i = 1; $i < count($people); $i++) {
//       $people[$i]['position'] = ($people[$i]['points'] == $people[$i-1]['points']) ? $people[$i-1]['position'] : $i+1;
//     }
//     return $people;
// }

// function ranking($people) {
//     usort($people, function ($a, $b) {
//       return $a['points'] === $b['points'] ? $a['name'] <=> $b['name'] : $b['points'] <=> $a['points'];
//     });
//     $rank = 0;
//     $points = 0;
//     foreach ($people as $k=>&$p) {
//       if ($p['points'] !== $points) {
//           $rank = $k + 1;
//           $points = $p['points']; 
//       }
//       $p['position'] = $rank;
//     }
//     return $people;
// }