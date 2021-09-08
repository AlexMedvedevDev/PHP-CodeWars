INSRTUCTIONS
In the following 6 digit number:
283910
91 is the greatest sequence of 2 consecutive digits.
In the following 10 digit number:
1234567890
67890 is the greatest sequence of 5 consecutive digits.
Complete the solution so that it returns the greatest sequence of five consecutive digits found within the number given. 
The number will be passed in as a string of only digits. It should return a five digit integer. 
The number passed may be as large as 1000 digits.

SOLUTIONS
<?php 
// function solution(string $s): int {
//     $greatest_number =  0;
//     for($i=0;$i <= strlen($s) - 5;++$i){
//       $substr = substr($s,$i,5);
//       if($greatest_number < $substr) {
//       $greatest_number = $substr;
//       }
//     }
//     return $greatest_number;
// }

// function solution(string $s): int {
//     if(strlen($s) <= 5) return (int)$s;
//     return max((int)substr($s, 0, 5), solution(substr($s, 1)));
// }

function solution(string $s):int{
    preg_match_all("/(?=(\d{5}))/",$s,$matches);
    return max($matches[1]);
}

// function solution(string $s): int {
//     return max(array_map(function($n) use ($s) { return substr($s, $n, 5); } , range(0, strlen($s)-1)));
// }