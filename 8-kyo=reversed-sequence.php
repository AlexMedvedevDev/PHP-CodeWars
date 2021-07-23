INSTRUCTIONS
Build a function that returns an array of integers from n to 1 where n>0.

Example : n=5 --> [5,4,3,2,1]

SOLUTIOJNS
<?php
function reverseSeq ($n) {
    return range($n, 1);
};

// function reverseSeq ($n) {
//     while($n>=1) {
//       $arr[] += $n--;
//     }
//     return $arr;
// };

// function reverseSeq ($n) {
//     $niz=[];
//   for ($i=$n; $i >= 1 ; $i--) {
//   array_push($niz,$i);
//   }
//   return $niz;
// }