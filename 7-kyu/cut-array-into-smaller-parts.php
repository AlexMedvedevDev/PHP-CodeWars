INSTRUCTIONS
Write function makeParts or make_parts (depending on your language) that will take an array as argument and the size of the chunk.
Example: if an array of size 123 is given and chunk size is 10 there will be 13 parts, 12 of size 10 and 1 of size 3.

SOLUTIONS
<?php
function makeParts($arr,$chunkSize){
    return array_chunk($arr, $chunkSize);
}

// use function array_chunk as makeParts;

// function makeParts($arr, $chunkSize) {
//     $result = [];
//     for ($i = 0; $i < count($arr); $i += $chunkSize) {
//       $result[] = array_slice($arr, $i, $chunkSize);
//     }
//     return $result;
// }