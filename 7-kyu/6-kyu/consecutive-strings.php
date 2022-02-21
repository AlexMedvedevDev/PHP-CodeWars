INSTRUCTIONS
You are given an array(list) strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.
Examples:
strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"], k = 2
Concatenate the consecutive strings of strarr by 2, we get:
treefoling   (length 10)  concatenation of strarr[0] and strarr[1]
folingtrashy ("      12)  concatenation of strarr[1] and strarr[2]
trashyblue   ("      10)  concatenation of strarr[2] and strarr[3]
blueabcdef   ("      10)  concatenation of strarr[3] and strarr[4]
abcdefuvwxyz ("      12)  concatenation of strarr[4] and strarr[5]
Two strings are the longest: "folingtrashy" and "abcdefuvwxyz".
The first that came is "folingtrashy" so 
longest_consec(strarr, 2) should return "folingtrashy".
In the same way:
longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
n being the length of the string array, if n = 0 or k > n or k <= 0 return "" (return Nothing in Elm).

SOLUTIONS
<?php
// function longestConsec($strarr, $k) {
//     $n = "";
//     if($k > count($strarr) || $k <= 0) {
//         return $n;
//     }
//     for($i = 0; $i < count($strarr); $i++) {
//         $current = "";
//         $max = $i + ($k - 1);
//         $scope = range($i, $max);
//         if($max >= count($strarr)) {
//             $scope = range($i, count($strarr) - 1);
//         }
//         for($j = 0; $j < count($scope); $j++) {
//             $current .= $strarr[$scope[$j]];
//         }
//         if(strlen($current) > strlen($n)) {
//             $n = $current;
//         }
//     }
//     return $n;
// }

// function longestConsec($strarr, $k) {
//     $longest = '';

//     for ($i = 0; $i <= count($strarr) - $k; $i++) {
//         $string = '';
    
//         for ($j = 0; $j < $k; $j++) {
//             $string .= $strarr[$i + $j];
//         }
        
//         if (strlen($string) > strlen($longest)) {
//             $longest = $string;
//         }
//     }
    
//     return $longest;
// }

function longestConsec($strarr, $k) {
    $longest = '';
    if ($k > 0) {
      for ($i = 0; $i < count($strarr) - $k + 1; $i++) {
        $consecutive = implode('', array_slice($strarr, $i, $k));
        $longest = strlen($consecutive) > strlen($longest) ? $consecutive : $longest;
      }
    }
    return $longest;
}