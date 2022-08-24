INSTRUCTIONS
You are given a list of numbers (positive / negative integers) and you need to get the nearest entries of a given value.
For example:
The number 10 is given and you need to get the nearest number in this series: 1, 2, 3, 4, 6, 12. The answer should be 12.

PHP
$intArray   = [1,2,3,4,6,12];
$givenValue = 10;
roundUp($givenValue, $intArray) => [12];

SOLUTIONS
<?php
class RoundToNearest
{
  public static function roundUp(int $number, array $list): array
  {
    $map = [];
    foreach($list as $i) {
      $map[abs($number - $i)][] = $i;
    }
    ksort($map);
     return reset($map) ?:[];
  }
}

// class RoundToNearest
// {

//   public static function roundUp(int $number, array $list): array
//   {
//     if (!$list) return [];
//     $min = min(array_map(function($x) use ($number) {return abs($number - $x);}, $list));
//     return array_values(array_filter($list, function($x) use ($number, $min) {return abs($x - $number) == $min;}));
//   }
// }