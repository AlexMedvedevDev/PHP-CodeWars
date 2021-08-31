INSTRUCTIONS
You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

Your task is to return an array where each object will have a new property 'greeting' with the following string value:

Hi < firstName here >, what do you like the most about < language here >?

SOLUTIONS
<?php 
function greet_developers($a) {
    foreach ($a as $key=>$value) 
      $a[$key]['greeting'] = "Hi {$a[$key]['first_name']}, what do you like the most about {$a[$key]['language']}?";
     return $a;
}

// function greet_developers($a) {
//     return array_map(function($v) {
//       $v['greeting'] = "Hi {$v['first_name']}, what do you like the most about {$v['language']}?";
//       return $v;
//     }, $a);
// }

// function greet_developers($developers) {
//     foreach ($developers as &$developer) {
//         $developer['greeting'] = sprintf('Hi %s, what do you like the most about %s?', $developer['first_name'], $developer['language']);
//     } // sprintf — Return a formatted string
    
//     return $developers; 
// } 