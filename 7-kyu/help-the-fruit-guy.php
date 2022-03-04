INSTRUCTIONS
Our fruit guy has a bag of fruit (represented as an array of strings) where some fruits are rotten. 
He wants to replace all the rotten pieces of fruit with fresh ones. 
For example, given ["apple","rottenBanana","apple"] the replaced array should be ["apple","banana","apple"]. 
Your task is to implement a method that accepts an array of strings containing fruits should returns an array of strings where all the rotten fruits are replaced by good ones.
Notes
If the array is null/nil/None or empty you should return empty array ([]).
The rotten fruit name will be in this camelcase (rottenFruit).
The returned array should be in lowercase.

SOLUTIONS
<?php
function removeRotten($fruitBasket) {
    $fruitBasket = array_map("strtolower", (array) $fruitBasket);
    return str_replace("rotten", "", $fruitBasket);
}

// function removeRotten($fruitBasket) {
//     return array_map(function ($str) {
//       return strtolower(str_replace('rotten', '', $str));
//     }, $fruitBasket ?? []);
// }

// function removeRotten($fruitBasket) {
//     return array_map(function($f) {return strtolower(str_replace('rotten', '', $f));}, (array)$fruitBasket);
// }