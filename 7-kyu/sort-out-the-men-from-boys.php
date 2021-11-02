INSTRUCTIONS
Scenario
Now that the competition gets tough it will Sort out the men from the boys .
Men are the Even numbers and Boys are the odd!
Task
Given an array/list [] of n integers , Separate The even numbers from the odds , or Separate the men from the boys
Notes
Return an array/list where Even numbers come first then odds
Since , Men are stronger than Boys , Then Even numbers in ascending order While odds in descending .
Array/list size is at least 4 .
Array/list numbers could be a mixture of positives , negatives .
Have no fear , It is guaranteed that no Zeroes will exists .!alt
Repetition of numbers in the array/list could occur , So (duplications are not included when separating).

Input >> Output Examples:
menFromBoys ({7, 3 , 14 , 17}) ==> return ({14, 17, 7, 3}) 
Explanation:
Since , { 14 } is the even number here , So it came first , then the odds in descending order {17 , 7 , 3} .

SOLUTIONS
<?php
function menFromBoys($arr) {
    $even = [];
    $odd = [];  
    foreach ($arr as $n) {
      if ($n % 2 == 0) {
        array_push($even, $n);
      } else {
        array_push($odd, $n);
      }
    }
    rsort($odd);
    sort($even);
    return array_values(array_unique(array_merge($even, $odd)));
}

// function menFromBoys($arr) 
// {
//   $arr = array_unique($arr);
//     $even = array_filter($arr, function ($item) {
//     return $item % 2 === 0;
//   });
//     $odd = array_filter($arr, function ($item) {
//     return $item % 2 !== 0;
//   });  
//   sort($even);
//   rsort($odd);  
//   return array_merge($even, $odd);
// }

// function menFromBoys($arr) : array
// {
//   foreach (array_unique($arr) as $v) {
//     $v % 2 == 0 ? $m[] = $v : $b[] = $v;
//   }
//   sort($m); arsort($b);
//   return array_merge($m, $b);
// }

// function menFromBoys($arr) {
//     $men_even = array();
//     $boy_odd = array();
//     foreach ($arr as $value) {
//        $value % 2 === 0 ? array_push($men_even, $value) : array_push($boy_odd, $value);
//     }
//     sort($men_even);
//     rsort($boy_odd);
//     return array_values(array_unique(array_merge($men_even, $boy_odd), SORT_REGULAR));
// }