INSTRUCTIONS
Make a function that will return a greeting statement that 
uses an input; your program should return, 
"Hello, <name> how are you doing today?".
SOLUTIONS

<?php 
function greet($name) {
    return "Hello, $name how are you doing today?";
}

// function greet($name) {
//   return sprintf("Hello, %s how are you doing today?", $name);
// }

// function greet(string $name): string {
//     return 'Hello, ' . $name . ' how are you doing today?';
// }

// function greet($name) {
//     $string = "Hello, $name how are you doing today?";
//     return $string;
// }

?>