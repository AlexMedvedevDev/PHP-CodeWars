INSTRUCTIONS
Make a function that returns the value multiplied by 50 and increased by 6. 
If the value entered is a string it should return "Error".

SOLUTIONS
<?php
function problem($x){
    return is_string($x) ? "Error" : $x*50+6;
}

// function problem($x){
//     return is_numeric($x) ? $x*50+6 : "Error";
// }