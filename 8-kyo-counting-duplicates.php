INSTRUCTIONS
<!-- Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string. The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

Example
"abcde" -> 0 # no characters repeats more than once
"aabbcde" -> 2 # 'a' and 'b'
"aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
"indivisibility" -> 1 # 'i' occurs six times
"Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
"aA11" -> 2 # 'a' and '1'
"ABBA" -> 2 # 'A' and 'B' each occur twice -->

SOLUTIONS

<?php 
// function duplicateCount($text) {
//     $ret  = 0;
//     $a    = [];
//     $t    = str_split( strtolower( $text ) );
//     $l    = count($t);
//     for($i=0; $i<$l; $i++){
//       $c = $t[$i];
//       if ( array_key_exists($c, $t) ){
//         if( $t[$c] === 1 )
//           $ret += 1;
//         $t[$c] += 1;
//       }
//       else{
//         $t[$c] = 1;
//       }
//     }//end i-for
//     return $ret;
//   }

// OTHER SOLUTIONS

// function duplicateCount($text) : int {
//     $stats = array_count_values(str_split(strtolower($text)));
//     return count(array_filter($stats, function($value) {return $value > 1;} ));
//   }

function duplicateCount($text) {
    return count(array_filter(array_count_values(str_split(strtolower($text))), function($v){return $v>1;}));
}

?>