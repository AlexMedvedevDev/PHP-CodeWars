INSTRUCTIONS
Description:
Count the number of exclamation marks and question marks, return the product.
Examples
Product("") == 0
product("!") == 0
Product("!ab? ?") == 2
Product("!!") == 0
Product("!??") == 2
Product("!???") == 3
Product("!!!??") == 6
Product("!!!???") == 9
Product("!???!!") == 9
Product("!????!!!?") == 20

SOLUTIONS
<?php
function product(string $s): int {
    $exc = 0;
    $que = 0;
    foreach(str_split($s) as $i) {
      if($i == "!") {
        $exc++;
      }
      if($i == "?") {
        $que++;
      }
    } 
    return $exc * $que;
}

// function product(string $s): int {
//     return substr_count($s, '!')*substr_count($s, '?');
// }

// function product(string $s): int {
//     $cf = count_chars($s);
//     return $cf[ord("!")] * $cf[ord("?")];
// }

// function product(string $s): int {
//     $s = array_count_values(str_split($s));
//     return $s['!'] * $s['?'];
// }

// function product(string $s): int {
//     $niz = str_split($s);
//     $uzvik = [];
//     $upit = [];
//     for ($i=0; $i <count($niz) ; $i++) {
//         if ($niz[$i] == '!' ) {
//           array_push($uzvik , $niz[$i]);
//         }
//         if ($niz[$i] == '?') {
//         array_push($upit , $niz[$i] );
//         }
//     }
// $rez = count($uzvik) * count($upit);
//     return $rez;
// }