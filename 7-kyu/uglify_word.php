INSTRUCTIONS
Summary
In this kata, you have to make a function named uglify_word (uglifyWord in Java and Javascript). It accepts a string parameter.
What does the uglify_word do?
It checks the char in the given string from the front with an iteration, in the iteration it does these steps:
There is a flag and it will be started from 1.
Check the current char in the iteration index.
If it is an alphabet character [a-zA-Z] and the flag value is equal to 1, then change this character to upper case.
If it is an alphabet character [a-zA-Z] and the flag value is equal to 0, then change this character to lower case.
Otherwise, if it is not an alphabet character, then set the flag value to 1.
If the current char is an alphabet character, do a boolean not operation to the flag.
After the iteration has done, return the fixed string that might have been changed in such iteration.
Examples
uglify_word("aaa") === "AaA"
uglify_word("AAA") === "AaA"
uglify_word("BbB") === "BbB"
uglify_word("aaa-bbb-ccc") === "AaA-BbB-CcC"
uglify_word("AaA-BbB-CcC") === "AaA-BbB-CcC"
uglify_word("eeee-ffff-gggg") === "EeEe-FfFf-GgGg"
uglify_word("EeEe-FfFf-GgGg") === "EeEe-FfFf-GgGg"
uglify_word("qwe123asdf456zxc") === "QwE123AsDf456ZxC"
uglify_word("Hello World") === "HeLlO WoRlD"

SOLUTIONS
<?php
function uglify_word(string $str): string {
    for($i =0, $f = 1; $i < strlen($str); $i+= 1) {
      if(!preg_match("/[a-z]/i", $str[$i])) {
        $f = 1;
        continue;
      }
      $str[$i] = ["strtolower", "strtoupper"][$f]($str[$i]);
      $f = !$f;
    }
    return $str;
}

// function uglify_word(string $str): string {
//     $arr= str_split($str); $f= true;
//     foreach($arr as &$x){
//       if( (bool) preg_match("/[a-zA-Z]/", $x) ){
//         $x= $f?strToUpper($x):strToLower($x); $f= !$f; }
//       else{$f= true;}
//       }
//     return implode('',$arr);
// }

// function uglify_word(string $str): string
// {
//   $str2 = '';
//   $k = 0;
//   for($i = 0; $i < strlen($str); $i++){
//     if(preg_match('/[a-zA-Z]/',$str[$i])){
//       if($k % 2 == 0){
//         $str2.=strtoupper($str[$i]);
//       }
//       else{
//         $str2.=strtolower($str[$i]);
//       }
//       $k++;
//     }
//     else{
//       $str2.=$str[$i];
//       $k = 0;
//     }
//   }
//   return $str2;
// }