INSTRUCTIONS
Complete the function/method so that it returns the url with anything after the anchor (#) removed.

Examples
// returns 'www.codewars.com'
removeUrlAnchor('www.codewars.com#about')
// returns 'www.codewars.com?page=1' 
removeUrlAnchor('www.codewars.com?page=1')

SOLUTIONS
<?php 
function replaceAll($string) {
    return explode('#', $string)[0];
}

// function replaceAll(string $string) :string 
// {
//   return preg_replace('/#.*$/','',$string);
// }

// function replaceAll($s) {
//     return strtok($s, "#");
// }

// function replaceAll($string) {
//     if( (strpos($string, '#') === false) ) return $string;
//     return( substr($string, 0,strpos($string, '#')) );
// }