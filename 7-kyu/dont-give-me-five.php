INSTRUCTIONS
In this kata you get the start number and the end number of a region and should return the count of all numbers except numbers with a 5 in it. 
The start and the end number are both inclusive!

Examples:
1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12
The result may contain fives. ;-)
The start number will always be smaller than the end number. 
Both numbers can be also negative!

SOLUTIONS
<?php 
function dont_give_me_five($start, $end) {
    $count = 0;
    for ($i = $start; $i <= $end; $i++) {
      if (!preg_match('/[5]/', $i)) {
        $count++;
      }
    }
    return $count;
}

// function dont_give_me_five($start, $end) 
// {
//   $count = 0;
//   for ($x=$start; $x<=$end; $x++)
//   {
//     if (strpos($x, "5") === false)
//       $count++;
//   }
//   return $count;
// }

// function dont_give_me_five($start, $end) {
//     return count(array_filter(
//       range($start, $end),
//       function($n) { return strpos($n, '5') === false; }
//     ));
// }