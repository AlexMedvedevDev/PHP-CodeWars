INSTRUCTIONS
In Russia regular bus tickets usually consist of 6 digits. The ticket is called lucky when the sum of the first three digits equals to the sum of the last three digits. Write a function to find out whether the ticket is lucky or not. Return true if so, otherwise return false. Consider that input is always a string. Watch examples below.
isLucky('123321') => 1+2+3 = 3+2+1 => true // The ticket is lucky
isLucky('12341234') => false // Only six-digit numbers allowed :(
isLucky('12a21a') => false // Letters are not allowed :(
isLucky('100200') => false // :(
isLucky('22') => false // :(
isLucky('abcdef') => false // :(

SOLUTIONS
<?php
function isLucky($ticket){
    if (!is_numeric($ticket) || strlen($ticket) != 6) {
      return false;
    } 
    $arr1 = str_split(substr($ticket, 0, 3));
    $arr2 = str_split(substr($ticket, 3));
    return array_sum($arr1) == array_sum($arr2);  
}

// function isLucky($ticket){
//     return preg_match('/^\d{6}$/', $ticket) && ($ticket[0] + $ticket[1] + $ticket[2] == $ticket[3] + $ticket[4] + $ticket[5]);
// }

// function isLucky($ticket){
//     if( strlen($ticket) != 6 )
//       return false;
      
//     $symbols = str_split($ticket);
//     $leftSum = 0;
//     $rightSum = 0;
//     for( $i = 0; $i < count($symbols)/2; $i++ ){
//       if( !is_numeric($symbols[$i]) || !is_numeric($symbols[$i+3]) )
//         return false;
        
//       $leftSum += $symbols[$i];
//       $rightSum += $symbols[$i+3];
//     }
//     return $leftSum == $rightSum;
// }