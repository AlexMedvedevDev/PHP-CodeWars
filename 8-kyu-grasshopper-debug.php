INSTRUCTIONS
Debug celsius converter
Your friend is traveling abroad to the United States so he wrote a program to convert fahrenheit to celsius. Unfortunately his code has some bugs.

Find the errors in the code to get the celsius converter working properly.

To convert fahrenheit to celsius:

celsius = (fahrenheit - 32) * (5/9)

SOLUTIONS
<?php
function weatherInfo(int $temp): string {
    $c = convertToCelsius($temp);
      return $c < 0 ? "$c is freezing temperature" : "$c is above freezing temperature";
    }
    function convertToCelsius(int $temp): int {
      return ($temp - 32) * 5/9;     
}

// function weatherInfo(int $f_temp): string {
//     $c_temp = intval(($f_temp - 32) * (5/9));
//     return sprintf('%d is %sfreezing temperature', $c_temp, $c_temp >= 0 ? 'above ' : '');
// } //sprintf — Return a formatted string

// function weatherInfo(int $temp): string 
// {
//   $c = convertToCelsius($temp);
//     if($c < 0) {
//       return ($c . " is freezing temperature");
//     } else {
//       return ($c . " is above freezing temperature");
//     }
// }
// function convertToCelsius(int $temperature): int
// {
//   $celsius = ($temperature - 32) * (5 / 9);
//   return $celsius;
// }