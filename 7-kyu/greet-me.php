INSTRUCTIONS
Write a method that takes one argument as name and then greets that name, capitalized and ends with an exclamation point.
Example:

"riley" --> "Hello Riley!"
"JACK"  --> "Hello Jack!"

SOLUTIONS
<?php
function greet($name) {
    return "Hello ".ucfirst(strtolower($name))."!";
}

// function greet($name) {
//     return sprintf("Hello %s!", ucwords(strtolower($name)));
// }