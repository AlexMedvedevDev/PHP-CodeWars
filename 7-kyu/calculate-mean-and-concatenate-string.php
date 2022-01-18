INSTRUCTIONS
You will be given an array which will include both integers and characters.
Return an array of length 2 with a[0] representing the mean of the ten integers as a floating point number. There will always be 10 integers and 10 characters. Create a single string with the characters and return it as a[1] while maintaining the original order.
lst = ['u', '6', 'd', '1', 'i', 'w', '6', 's', 't', '4', 'a', '6', 'g', '1', '2', 'w', '8', 'o', '2', '0']
Here is an example of your return
[3.6, "udiwstagwo"]

SOLUTIONS
<?php
function mean(array $a): array {
    $sum = 0;
    $s = '';
    foreach($a as $i) {
      if (is_numeric($i)) {
        $sum += $i;
      } else {
        $s .= $i;
      }
    }
    return [$sum / 10, $s];  
}

// function mean( array $a ) : array {
//     return [array_sum( $a )/10, preg_replace( "/\d+/", "", implode( '', $a ) )];
// }

// function mean(array $a): array {
//     return [array_sum(array_filter($a, function ($e) {return is_numeric($e);})) / 10, implode(array_filter($a, function ($e) {return !is_numeric($e);}))];
// }