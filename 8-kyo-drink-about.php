INSTRUCTIONS
Kids drink toddy.
Teens drink coke.
Young adults drink beer.
Adults drink whisky.
Make a function that receive age, and return what they drink.
Rules:
Children under 14 old.
Teens under 18 old.
Young under 21 old.
Adults have 21 or more.
Examples: (Input --> Output)
13 --> "drink toddy"
17 --> "drink coke"
18 --> "drink beer"
30 --> "drink whisky"

SOLUTIONS
<?php
// function people_with_age_drink(int $old): string {
//     if ($old < 14) 
//           return 'drink toddy';
//     if ($old >=14 && $old < 18)
//           return 'drink coke';
//     if ($old>=18 && $old<21)
//           return 'drink beer';
//     if ($old>=21)
//           return 'drink whisky';
// }

function people_with_age_drink(int $n): string {
    return 'drink ' . ($n < 21 ? $n < 18 ? $n < 14 ? 'toddy' : 'coke' : 'beer' : 'whisky');
}

// function people_with_age_drink(int $old): string {
//     switch (true) {
//       case ($old < 14): return "drink toddy";
//       case ($old < 18): return "drink coke";
//       case ($old < 21): return "drink beer";
//       case ($old >= 21): return "drink whisky";
//     }
// }

// function people_with_age_drink(int $old): string {
//     $limit = [14 => 'toddy', 18 => 'coke', 21 => 'beer'];
//     foreach ($limit as $age => $drink) {
//         if ($old < $age) {
//             return 'drink ' . $drink;
//         }
//     }
//     return 'drink whisky';
// }
