INSTRUCTIONS
Due to another of his misbehaved, the primary school's teacher of the young Gauß, Herr J.G. 
Büttner, to keep the bored and unruly young schoolboy Karl Friedrich Gauss busy for a good long time, while he teaching arithmetic to his mates, assigned him the problem of adding up all the whole numbers from 1 through a given number n.
Your task is to help the young Carl Friedrich to solve this problem as quickly as you can; so, he can astonish his teacher and rescue his recreation interval.
Here's, an example:

f(n=100) // returns 5050 
It's your duty to verify that n is a valid positive integer number. If not, please, return false (None for Python, null for C#).

SOLUTIONS
<?php 
function f($n = 0) {
    return $n > 0 && is_int($n) ? array_sum(range(1, $n)) : false; 
}

// function f($n = 0) {
//     return is_int($n) && $n > 0 ? $n * ($n + 1) / 2 : false;
// }

// function f($n = false) {
//     return $n > 0 && is_int($n) ? $n * ($n + 1) / 2 : false;
// }