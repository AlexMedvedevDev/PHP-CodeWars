INSTRUCTIONS
You need to create a function that converts the input into this format, with the output being the same string expect there is a pattern of uppercase and lowercase letters.
Example:
input:  "stop Making spongebob Memes!"
output: "StOp mAkInG SpOnGeBoB MeMeS!"

SOLUTIONS
<?php
function sponge_meme(string $sentence): string {
    $splitted = str_split(strtolower($sentence));
    foreach($splitted as $key => $value) {
      if($key % 2 == 0) {
        $splitted[$key] = strtoupper($value);
      }
    }
    return implode('', $splitted);
}

// function sponge_meme(string $s): string {
//     return implode('', array_map(function($i) use($s) {return $i&1 ? strtolower(substr($s,$i,1)) : strtoupper(substr($s,$i,1));}, range(0,strlen($s)-1)));
// }