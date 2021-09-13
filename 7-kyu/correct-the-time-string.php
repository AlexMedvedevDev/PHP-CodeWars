INSTRUCTIONS
You have to create a method, that corrects a given time string.
There was a problem in addition, so many of the time strings are broken.
Time is formatted using the 24-hour clock, so from 00:00:00 to 23:59:59.
Examples
"09:10:01" -> "09:10:01"  
"11:70:10" -> "12:10:10"  
"19:99:99" -> "20:40:39"  
"24:01:01" -> "00:01:01"  
If the input-string is null or empty return exactly this value! 
If the time-string-format is invalid, return null. 

SOLUTIONS
<?php 
// function timeCorrect($timestring) {
//     if (is_null($timestring)) {
//       return null;
//     }
//     if (empty($timestring)) {
//       return '';
//     }
//     if (!preg_match('/^\d{2}\:\d{2}\:\d{2}$/', $timestring)){
//       return null;
//     }
//     list($h, $m, $s) = explode(':', $timestring);
//     $time = $h*3600 + $m * 60 + $s;
//     return date('H:i:s', $time);
// }

function timeCorrect($timestring) {
    if (empty($timestring)) return $timestring;
    $dateObj = DateTime::createFromFormat('H:i:s', $timestring);
    return $dateObj == false ? null :  $dateObj->format('H:i:s');
}

// function timeCorrect($timestring) {
//     if(!$timestring) return $timestring;
//     if(preg_match("/\d{2}:\d{2}:\d{2}/",$timestring) != 1) return null;
//     $parts = explode(":",$timestring);
//     return gmdate("H:i:s",($parts[0] * 60 * 60) + ($parts[1] * 60) + $parts[2]);
// }