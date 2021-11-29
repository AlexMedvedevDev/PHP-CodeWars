INSTRUCTIONS
You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

Your task is to return:

true if at least one Ruby developer has signed up; or
false if there will be no Ruby developers.
For example, given the following input array:

$list1 = [
  [
    "first_name" => "Emma",
    "last_name" => "Z.",
    "country" => "Netherlands",
    "continent" => "Europe",
    "age" => 29,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Piotr",
    "last_name" => "B.",
    "country" => "Poland",
    "continent" => "Europe",
    "age" => 128,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Jayden",
    "last_name" => "P.",
    "country" => "Jamaica",
    "continent" => "Americas",
    "age" => 42,
    "language" => "JavaScript"
  ]
];
your function should return true.

Notes:

The input array will always be valid and formatted as in the example above

SOLUTIONS
<?php
function is_ruby_coming($a) {
    return in_array("Ruby", array_column($a, 'language'));
}

// function is_ruby_coming($a) {
//     foreach($a as $dev){
//       if($dev['language'] == 'Ruby')
//       return true;
//     }
//     return false;
// }

// function is_ruby_coming(array $arr): bool {
//     return (bool) array_filter($arr, fn($obj) => $obj['language'] == 'Ruby');
// }

// function is_ruby_coming($a) {
//     $ruby = 0;
//     foreach($a as $value){
//      if( $value['language'] == "Ruby" ){
//         $ruby++;
//       }
//     }
//     return $ruby>0;
// }