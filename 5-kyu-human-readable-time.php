INSTRUCTIONS
Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (HH:MM:SS)

HH = hours, padded to 2 digits, range: 00 - 99
MM = minutes, padded to 2 digits, range: 00 - 59
SS = seconds, padded to 2 digits, range: 00 - 59
The maximum time never exceeds 359999 (99:59:59)

You can find some examples in the test fixtures.

SOLUTIONS
<?php
// function human_readable($seconds) {
//     if ($seconds < 0 || $seconds > 360000 ) {
//       return null;
//     }
//     $hours = floor($seconds / 3600);
//     $seconds -= $hours * 3600;
//     if ( $hours < 10 ) {
//       $hours = '0'. $hours;
//     }
//     $minutes = floor($seconds / 60 );
//     $seconds -= $minutes * 60;
//     if ( $minutes < 10 ) {
//       $minutes = '0'. $minutes;
//     }
//     if ($seconds < 10 ) {
//       $seconds = '0'. $seconds;
//     }  
//     return $hours .':'. $minutes .':' . $seconds;
// }

function human_readable(int $seconds): string
{
  return sprintf('%02d:%02d:%02d', $seconds / 3600, ($seconds % 3600) / 60, $seconds % 60);
}

// function human_readable($seconds) {
//     $hours = floor($seconds / 3600);
//       if ($hours < 10) {
//       $hours = "0" . $hours;
//     }    
//     return $hours . gmdate(":i:s", $seconds % 3600);
// }

// function human_readable($seconds) {    
//     $hours = floor($seconds/(60*60));
//     $seconds = floor($seconds%(60*60));
//     $minutes = floor($seconds/60);
//     $seconds = $seconds%60;

//     $second = addZero($seconds);
//     $minutes = addZero($minutes);
//     $hours = addZero($hours);
//     return sprintf('%s:%s:%s', $hours, $minutes, $second);
// }
// function addZero($num){
//     if($num < 10) {
//        return '0'. $num;
//     }
//     return $num;
// }