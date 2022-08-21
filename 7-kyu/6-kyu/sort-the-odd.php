INSTRUCTIONS
You will be given an array of numbers. 
You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.
Examples
[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]

SOLUTIONS
<?php
function sortArray(array $arr) : array {
    $odds = array_filter($arr, function ($n) { return $n % 2 != 0; });
    sort($odds);
    return array_map(function ($n) use (&$odds) {
      if ($n % 2 == 0) return $n;
      return array_shift($odds);
    }, $arr);
}

// function sortArray(array $arr) : array {
//     $even = $odd = array();
    
//     foreach($arr as $a){
//       if($a % 2 == 0){
//         $even[] = $a;
//       }else{
//         $odd[] = $a;
//       }
//     }
//     sort($odd);
//         $newArr = [];
//     for($i = 0; $i < count($arr); $i++){
//       if($arr[$i] % 2 == 0){
//         $newArr[] = array_shift($even); // array_shift — Shift an element off the beginning of array
//       }else{
//         $newArr[] = array_shift($odd);
//       }
//     }
//     return $newArr;
// }

// function sortArray(array $arr) : array {
//     $odds = array_filter($arr, fn($n) => $n % 2);
//     sort($odds);
//     foreach ($arr as &$n) {
//       $n = $n % 2 ? array_shift($odds) : $n;
//     }
//     return $arr;
// }

