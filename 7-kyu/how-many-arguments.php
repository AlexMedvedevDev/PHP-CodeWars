INSTUCRIONS
args_count(1, 2, 3) -> 3
args_count(1, 2, 3, 10) -> 4

SOLUTIONS
<?php
function args_count (...$args){
    return count($args);
}

// function args_count() {
//     return func_num_args();
// } // this solution doesn`t work but i leave it here

// function args_count(...$args) {
//     return sizeof($args);
// }

// function args_count(){
//     return $n = func_num_args();
// }