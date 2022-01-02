INSTRUCTIONS
The town sheriff dislikes odd numbers and wants all odd numbered families out of town! 
In town crowds can form and individuals are often mixed with other people and families. 
However you can distinguish the family they belong to by the number on the shirts they wear. 
As the sheriff's assistant it's your job to find all the odd numbered families and remove them from the town!
Challenge: You are given a list of numbers. The numbers each repeat a certain number of times. 
Remove all numbers that repeat an odd number of times while keeping everything else the same.
odd_ones_out([1, 2, 3, 1, 3, 3]) = [1, 1]
In the above example:
the number 1 appears twice
the number 2 appears once
the number 3 appears three times
2 and 3 both appear an odd number of times, so they are removed from the list. The final result is: [1,1]
Here are more examples:
odd_ones_out([1, 1, 2, 2, 3, 3, 3]) = [1, 1, 2, 2]
odd_ones_out([26, 23, 24, 17, 23, 24, 23, 26]) = [26, 24, 24, 26]
odd_ones_out([1, 2, 3]) = []
odd_ones_out([1]) = []

SOLUTIONS
<?php
function odd_ones_out($arr) {
    $count = array_count_values($arr);
    $res = [];
    foreach($arr as $value){
      if ($count[$value] % 2 == 0)
        $res[] = $value;
    }
    return $res;
} 

// function odd_ones_out($arr): array
// {
//   $count = array_count_values($arr); //array_count_values — Counts all the values of an array

//   return array_values(array_filter($arr, function($n) use($count){ // array_filter — Filters elements of an array using a callback function
//       return $count[$n] % 2 == 0;
//   }));
// }

// function odd_ones_out($arr) {
//     $count = [];
//     for ($i=0; $i<count($arr); $i++) { $count[$arr[$i]]++; }
    
//     $return = [];
//     for ($i=0; $i<count($arr); $i++) {
//     if ($count[$arr[$i]] % 2 != 1) { array_push($return, $arr[$i] ); }
//     }
//     return $return;
// }

// function odd_ones_out($arr) {
//     $result = array(); 
//     foreach($arr as $elemnt) 
//     { 
//         if (array_key_exists($elemnt, $result)) { 
//             $result[$elemnt] += 1; 
//         } 
//         else { 
//             $result[$elemnt] = 1; 
//         } 
//     } 
//     $evens = array(); 
//     foreach( $arr as $elemnt) { 
//         if ($result[$elemnt] %2 ==0){ 
//             array_push($evens, $elemnt); 
//         } 
//     } 
//     return array_values($evens); 
// }