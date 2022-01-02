INSTRICTIONS
Create a function, as short as possible, that returns this lyrics.
Your code should be less than 300 characters. Watch out for the three points at the end of the song.

Baby shark, doo doo doo doo doo doo
Baby shark, doo doo doo doo doo doo
Baby shark, doo doo doo doo doo doo
Baby shark!
Mommy shark, doo doo doo doo doo doo
Mommy shark, doo doo doo doo doo doo
Mommy shark, doo doo doo doo doo doo
Mommy shark!
Daddy shark, doo doo doo doo doo doo
Daddy shark, doo doo doo doo doo doo
Daddy shark, doo doo doo doo doo doo
Daddy shark!
Grandma shark, doo doo doo doo doo doo
Grandma shark, doo doo doo doo doo doo
Grandma shark, doo doo doo doo doo doo
Grandma shark!
Grandpa shark, doo doo doo doo doo doo
Grandpa shark, doo doo doo doo doo doo
Grandpa shark, doo doo doo doo doo doo
Grandpa shark!
Let's go hunt, doo doo doo doo doo doo
Let's go hunt, doo doo doo doo doo doo
Let's go hunt, doo doo doo doo doo doo
Let's go hunt!
Run away,…

SOLUTIONS
<?php
function babySharkLyrics() {
    $sh=['Baby','Mommy','Daddy','Grandma','Grandpa'];
    $d=", doo doo doo doo doo doo\n";
    $lyr="";
    foreach($sh as $s){
      $lyr.= str_repeat("$s shark$d", 3)."$s shark!\n";
    }
    return $lyr.str_repeat("Let's go hunt$d", 3)."Let's go hunt!\nRun away,…";
}

// function babySharkLyrics() {
//     $w = ['Baby shark', 'Mommy shark', 'Daddy shark', 'Grandma shark', 'Grandpa shark', 'Let\'s go hunt'];
//     $s = '';
//     foreach($w as $w) {
//       $s .= str_repeat($w . ", doo doo doo doo doo doo\n", 3) . $w . '!' . "\n";
//     }
//     return $s . 'Run away,…';
// }

// function babySharkLyrics() {
//     $w = ['Baby shark', 'Mommy shark', 'Daddy shark', 'Grandma shark', 'Grandpa shark', 'Let\'s go hunt'];
//     $r = "";
//     foreach ($w as $itm) {
//       $r.=str_repeat("{$itm}, doo doo doo doo doo doo\n", 3);
//       $r.="{$itm}!\n";
//     }
//     return $r . "Run away,…";
// }