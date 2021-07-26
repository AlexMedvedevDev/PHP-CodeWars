INSTRUCTIONS
Your friend has been out shopping for puppies (what a time to be alive!)... 
He arrives back with multiple dogs, and you simply do not know how to respond!

By repairing the function provided, you will find out exactly how you should respond, 
depending on the number of dogs he has.
The number of dogs will always be a number and there will always be at least 1 dog.

SOLUTIONS
<?php
function howManyDalmations($number) {  
    $dogs = ["Hardly any", "More than a handful!", "Woah that's a lot of dogs!", "101 DALMATIANS!!!"];
    
    if ($number <= 10) return $dogs[0];
    if ($number <= 50) return $dogs[1];
    if ($number <= 100) return $dogs[2];
    if ($number >= 101) return $dogs[3];   
}

// function howManyDalmations($number) {
//     $dogs = ["Hardly any", "More than a handful!", "Woah that's a lot of dogs!", "101 DALMATIANS!!!"];
//     $respond = $number <= 10 ? $dogs[0] : ($number <= 50 ? $dogs[1] : ($number == 101 ? $dogs[3] : $dogs[2]));
//     return $respond;
// }