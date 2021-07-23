INSTRUCTIONS
The goal of this exercise is to convert a string to a new string 
where each character in the new string is "(" if that character 
appears only once in the original string, or ")" if that character 
appears more than once in the original string. 
Ignore capitalization when determining if a character is a duplicate.

Examples
"din"      =>  "((("
"recede"   =>  "()()()"
"Success"  =>  ")())())"
"(( @"     =>  "))((" 

SOLUTIONS
<?php
function duplicate_encode($word){
    $word = str_split(strtolower($word));
    $str = "";
    foreach($word as $key){
      (count(array_keys($word,$key))>1) ? $str .= ")" : $str .= "(";
    } 
    return $str;      
}

// function duplicate_encode($word){
//     return implode('',array_map(function($val)use($word){ return  substr_count(strtolower($word),$val)== 1 ? "(" : ")";},str_split(strtolower($word),1)));   
//     }
