INSTRUCTIONS
Given a string, turn each character into its ASCII character code and join them together to create a number - let's call this number total1:
'ABC' --> 'A' = 65, 'B' = 66, 'C' = 67 --> 656667
Then replace any incidence of the number 7 with the number 1, and call this number 'total2':
total1 = 656667
              ^
total2 = 656661
              ^
Then return the difference between the sum of the digits in total1 and total2:
  (6 + 5 + 6 + 6 + 6 + 7)
- (6 + 5 + 6 + 6 + 6 + 1)
-------------------------
                       6

SOLUTIONS
<?php
function calc($s) {
    $total1 = implode(array_map(fn(string $s) => ord($s), str_split($s)));  
    $total2 = str_replace('7', '1', $total1); 
    return array_sum(str_split($total1)) - array_sum(str_split($total2));  
}

// function calc($s) {
//     return substr_count(join(array_map('ord', str_split($s))), '7') * 6;
// }

// function calc( $s ) {
//     for ( $i=0, $li = strlen( $s ), $total = ""; $i < $li; $i++ )
//         $total .= strval( ord( $s[$i] ) );
//     return array_sum( str_split( $total ) ) - array_sum( str_split( str_replace( "7", "1", $total ) ) );
// }

// function calc($s) {
//     $total1 = implode('', array_map('ord', str_split($s)));
//     $total2 = str_replace('7', '1', $total1);
//     return array_sum(str_split($total1)) - array_sum(str_split($total2));
// }