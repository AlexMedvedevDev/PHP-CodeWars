<!-- An isogram is a word that has no repeating letters, consecutive or non-consecutive. 
Implement a function that determines whether a string that contains only letters is an isogram. 
Assume the empty string is an isogram. Ignore letter case.

isIsogram "Dermatoglyphics" == true
isIsogram "aba" == false
isIsogram "moOse" == false -- ignore letter case

Solution. -->
function isIsogram($string) {
  foreach (range('a','z') as $let){
    if (substr_count(strtolower($string), $let) > 1){return false;}
  }
  return true;
}

<!-- function isIsogram($string) {
  return count(str_split($string)) == count(array_unique(str_split(strtolower($string))));
} -->