INSTRUCTIONS
The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.

SOLUTIONS
<?php
// function accum($s) {
//     $output = '';
//     for($i = 1,$len = strlen($s);$i <= $len ;$i++){
//         for($j = 1;$j <= $i ;$j++){
//           $output .= ($j === 1)? strtoupper($s[$i - 1]) : strtolower($s[$i - 1]); 
//         }
//         $output .= '-';       
//     }
// 	$output = rtrim($output,"-");
// 	return $output;
// }

function accum($s) {
    $parts = [];
    
    foreach (str_split($s) as $index => $part) {
      $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
    }
    
    return implode('-', $parts);
}

// function accum($s) {
//     foreach (str_split($s) as $position => $char) {
//       $words[] = ucwords(str_repeat(strtolower($char), $position + 1));
//     }
//     return implode('-', $words);
// }