<!-- Instructions
Complete the solution so that it reverses all of the words within the string passed in.
Example:
reverseWords("The greatest victory is that which requires no battle");
should return "battle no requires which that is victory greatest The" -->

<!-- Solutions: -->
function reverseWords($str) {
  return implode(' ', array_reverse(explode(" " , $str)));
  // implode (string function) - Join array elements with a string
  // explode (string function) - Split a string by a string
}
