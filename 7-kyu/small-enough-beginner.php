INSTRUCTIONS
You will be given an array and a limit value. 
You must check that all values in the array are below or equal to the limit value.
If they are, return true. Else, return false.
You can assume all values in the array are numbers.

SOLUTIONS
<?php 
// function smallEnough($a, $limit)
// {
//   if(max($a) <= $limit) { return true; } 
//   else { return false; }
// }

function smallEnough($a, $limit) {
    return max($a) <= $limit;
}

// function smallEnough($a, $limit)
// {
//   return max($a) > $limit ? false : true;
// }

// function smallEnough($a, $limit)
// {
//   foreach($a as $value){
//   $result = ($value < $limit || $value == $limit) ? true : null;
//   if($result != true)
//   return false;
//   }
//   return $result;
// }

// function smallEnough($a, $limit)
// {
// $counter = 0;
//   foreach($a  as $value) 
//   {
//     if($value > $limit)
//     {
//       $counter += 1;
//     }
//   }  
  
//   if($counter > 0)
//   {
//     return false;
//   }
//   else
//   {
//     return true;
//   }
// }