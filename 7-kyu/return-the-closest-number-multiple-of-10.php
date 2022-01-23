INSTRUCTIONS
Given a number return the closest number to it that is divisible by 10.
Example input:
22
25
37
Expected output:
20
30
40

SOLUTIONS
<?php
function closest_multiple_10($n) {
    return round($n / 10) * 10;
}

// function closest_multiple_10($n) {
//     return round($n, -1);
// }

// function closest_multiple_10($n) {
//     $difference = $n % 10;
//     return $difference <= 4 ? $n - $difference : $n + (10 - $difference);
// }

// function closest_multiple_10($n) {
//     $countDown = $n;
//     $countUp = $n;
//     for ($i = 0; $i < 9; $i++) {    
//       if (($countUp % 10) === 0) {
//         $n = $countUp;
//         break;
//       } elseif (($countDown % 10) === 0) {
//         $n = $countDown;
//         break;
//       }
//       $countDown--;
//       $countUp++;
//     }
//     return $n;
// }