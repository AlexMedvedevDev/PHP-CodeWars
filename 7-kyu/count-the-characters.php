INSTRUCTIONS
The goal of this kata is to write a function that takes two inputs: a string and a character. The function will count the number of times that character appears in the string. The count is case insensitive.
For example:
count_char("fizzbuzz", "z"); // => 4
count_char("Fancy fifth fly aloof", "f"); // => 5
The character can be any alphanumeric character.

SOLUTIONS
<?php
function count_char(string $s, string $c): int {
    $res = 0;
    foreach(str_split(strtolower($s)) as $i) {
      if($i == strtolower($c)) {
        $res++;
      }
    }
    return $res;
}

// function count_char(string $s, string $c): int {
//     return substr_count(strtoupper($s), strtoupper($c));
// }

// function count_char(string $s, string $c): int
// {
//   str_ireplace($c, '-', $s, $count); // str_ireplace — Case-insensitive version of str_replace()  
//   return $count;
// }