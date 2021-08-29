INSTRUCTIONS
You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

Your task is to return either:

true if all developers in the list code in the same language; or
false otherwise.
For example, given the following input array:

$list1 = [
  [
    "first_name" => "Daniel",
    "last_name" => "J.",
    "country" => "Aruba",
    "continent" => "Americas",
    "age" => 42,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Kseniya",
    "last_name" => "T.",
    "country" => "Belarus",
    "continent" => "Europe",
    "age" => 22,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Hanna",
    "last_name" => "L.",
    "country" => "Hungary",
    "continent" => "Europe",
    "age" => 65,
    "language" => "JavaScript"
  ]
];
your function should return true.

Notes:

The strings representing a given language will always be formatted in the same way (e.g. 'JavaScript' will always be formatted will upper-case 'J' and 'S'
The input array will always be valid and formatted as in the example above.

SOLUTIONS
<?php 
// function is_same_language($a) {
//     $search_key = $a[0]['language'];
    
//     foreach ($a as $current_array) {  
//       if ($current_array['language'] !== $search_key) {
//         return false;
//         }
//       }
//     return true;
// }

// function is_same_language($a) {
//     return count(array_unique(array_column($a, 'language'))) == 1 ? true : false;
// } // array_column — Return the values from a single column in the input array

function is_same_language(array $a) {
    return count(array_unique(array_column($a, 'language'))) === 1;
}

// function is_same_language($arr) {
//     return count(array_unique(array_map(fn($x) => $x['language'], $arr))) == 1;
// }
