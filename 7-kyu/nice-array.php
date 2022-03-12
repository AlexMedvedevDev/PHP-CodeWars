INSTRUCTIONS
A Nice array is defined to be an array where for every value n in the array, there is also an element n-1 or n+1 in the array.
example:
[2,10,9,3] is Nice array because
2=3-1
10=9+1
3=2+1
9=10-1
Write a function named isNice/IsNice that returns true if its array argument is a Nice array, else false. 
You should also return false if input array has no elements.

SOLUTIONS
<?php
function isNice($arr) {
    foreach($arr as $i) {
      if(!(in_array($i - 1, $arr) || in_array($i + 1, $arr))) 
        return false;
    }
    return $arr ? true : false;
}

// function isNice($arr) {
//     if (empty($arr)) return false;
//     foreach ($arr as $n) {
//       if ( !is_numeric(array_search($n-1, $arr)) && !is_numeric(array_search($n+1, $arr)) ) return false;
//     }
//     return true;
// }