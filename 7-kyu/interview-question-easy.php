INSTRUCTIONS
You receive the name of a city as a string, and you need to return a string that shows how many times each letter shows up in the string by using asterisks (*).
For example:
"Chicago"  -->  "c:**,h:*,i:*,a:*,g:*,o:*"
As you can see, the letter c is shown only once, but with 2 asterisks.
The return string should include only the letters (not the dashes, spaces, apostrophes, etc). There should be no spaces in the output, and the different letters are separated by a comma (,) as seen in the example above.
Note that the return string must list the letters in order of their first appearance in the original string.
More examples:
"Bangkok"    -->  "b:*,a:*,n:*,g:*,k:**,o:*"
"Las Vegas"  -->  "l:*,a:**,s:**,v:*,e:*,g:*"

SOLUTIONS
<?php
function get_strings($city) : string {
    $arr = array_count_values(str_split(str_replace(' ','',strtolower($city))));
    foreach($arr as $k => $v) {
      $str[] = $k. ':' .str_repeat('*', $v);
    } 
     return implode(',', $str);
}

// function get_strings(string $city): string {
//     $city = strtolower(str_replace(' ', '', $city));
//     $values = array_count_values(str_split($city));
  
//     $res = array_map(fn($count, $item) =>
//         $item . ':' . str_repeat('*', $count)
//     , $values, array_keys($values));
  
//     return implode(',', $res);
// }

// function get_strings($city) 
// {
//     $city = strtolower($city);
//     $string_city = "";
//     for ($a = 0; $a < strlen($city); $a++)
//     {
//         if (str_contains($string_city, $city[$a]) == false && ctype_alpha($city[$a]) == true) $string_city .= $city[$a];
//     }
//     $answer = "";
//     for ($x = 0; $x < strlen($string_city); $x++)
//     {
//         $temp_1 = substr_count($city, $string_city[$x]);
//         $answer .= $string_city[$x];
//         $answer .= ':';
//         for ($y = 1; $y <= $temp_1; $y++)
//         {
//             $answer .= '*';
//         }
//         if ($x != strlen($string_city) - 1)
//         {
//             $answer .= ',';
//         } 
//     }
//     return $answer;
// }

// function get_strings($city) {
//     $res = '';
//     $city = strtolower($city);
//     foreach (str_split($city) as $letter) {
//       if (strpos($res, $letter) !== false || $letter == ' ') {
//         continue;
//       }
//       $res .= "$letter:" . str_repeat("*", substr_count($city, $letter)) . ",";
//     }
    
//     return rtrim($res, ",");
// }