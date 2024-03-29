INSTRUCTIONS
Number of people in the bus
There is a bus moving in the city, and it takes and drop some people in each bus stop.
You are provided with a list (or array) of integer arrays (or tuples). 
Each integer array has two items which represent number of people get into bus (The first item) 
and number of people get off the bus (The second item) in a bus stop.
Your task is to return number of people who are still in the bus after the last bus station (after the last array). 
Even though it is the last bus stop, the bus is not empty and some people are still in the bus, and they are probably sleeping there :D
Take a look on the test cases.
Please keep in mind that the test cases ensure that the number of people in the bus is always >= 0. 
So the return integer can't be negative.
The second value in the first integer array is 0, since the bus is empty in the first bus stop.

SOLUTIONS
<?php 
// function number($bus_stops) {
//     $in_bus = 0;    
//     foreach( $bus_stops as $bus_stop )
//     {
//       $in_bus +=  $bus_stop[0] - $bus_stop[1];
//     }     
//     return $in_bus;
// }

// function number($bus_stops) {
//     $people_in_bus = 0;
//     foreach($bus_stops as $bus_stop) {
//       list($in, $out) = $bus_stop;
//       if (is_int($in))  $people_in_bus += $in;
//       if (is_int($out)) $people_in_bus -= $out;
//     }
//     return $people_in_bus;
// }

function number($bus_stops) {
    return array_sum(array_column($bus_stops, 0)) - array_sum(array_column($bus_stops, 1));
}

// function number($bus_stops) {
//     return array_reduce($bus_stops, function($peopleCount, $stop) {
//       return $peopleCount + $stop[0] - $stop[1];
//     });
// }