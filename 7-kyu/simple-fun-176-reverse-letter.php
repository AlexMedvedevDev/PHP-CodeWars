INSTRUCTIONS
Task
Given a string str, reverse it omitting all non-alphabetic characters.

Example
For str = "krishan", the output should be "nahsirk".
For str = "ultr53o?n", the output should be "nortlu".

Input/Output
[input] string str
A string consists of lowercase latin letters, digits and symbols.
[output] a string

SOLUTIONS
<?php 
function reverseLetter($str){
    return strrev(preg_replace("/[^a-zA-Z]+/", "", $str));
}