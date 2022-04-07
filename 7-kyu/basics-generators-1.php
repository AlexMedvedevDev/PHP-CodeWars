INSTRUCTIONS
Basics - Generators #1
Generators are very useful things in programming, in this series we will learn how to use generators and see how we can apply generators to common programming challenges.
Task
You must complete the generator function that must increment a counter by 1 each time also if the argument is supplied (will always be a number) you must then change the counter to that number.
Important
The counter must start at 1 when the generator is initialized
More Info: Iterators and Generators (JavaScript), Generators Overview (PHP)

SOLUTIONS
<?php
function generator() {
    $counter = 1;
    while(true){
      $value = yield $counter++;
      if($value) $counter = $value;
    }
}

// function generator( int $n = 1 ) {
//     while ( true ) {
//         $input = yield $n++;
//         if ( ! is_null( $input ) )
//             $n = (int) $input;
//     }
// }

// function generator() {
//     for($i = 1; ;$i += 1) if( $z = yield $i) $i = $z - 1;
// }