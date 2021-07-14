INSTRUCTIONS
In DNA strings, symbols "A" and "T" are complements of each other,
as "C" and "G". You have function with one side of the DNA 
(string); 
you need to get the other complementary side. 
DNA strand is never empty or there is no DNA at all.
Example: (input: output)
DNA_strand("ATTGC") // returns "TAACG"
DNA_strand("GTAT") // returns "CATA"

SOLUTIONS
<?php
function DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA'); //strtr — Translate characters or replace substrings
}

// function DNA_strand($dna) {

//     $conversion = ["A"=>"T","T"=>"A","G"=>"C", "C"=>"G"] ; 
//     $dna = str_split($dna) ;
//     $res = "" ; 
//     foreach($dna as $el){
//       $res .= $conversion[$el] ;  
//     }
//     return $res ;   
// }

// function DNA_strand($dna) {
//     // Replace 'A' with 't'
//     $dna = str_replace("A", "t", $dna);
    
//     // Replace 'T' with 'a'
//     $dna = str_replace("T", "a", $dna);
    
//     // Replace 'C' with 'g'
//     $dna = str_replace("C", "g", $dna);
    
//     // Replace 'G' with 'c'
//     $dna = str_replace("G", "c", $dna);
    
//     // Return $dna as uppercase
//     return strtoupper($dna);
// }
