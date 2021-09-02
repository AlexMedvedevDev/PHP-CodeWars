INSTRUCTIONS
For every good kata idea there seem to be quite a few bad ones!

In this kata you need to check the provided 2 dimensional array (x) for good ideas 'good' and bad ideas 'bad'. 
If there are one or two good ideas, return 'Publish!', if there are more than 2 return 'I smell a series!'. 
If there are no good ideas, as is often the case, return 'Fail!'.

The sub arrays may not be the same length.

The solution should be case insensitive (ie good, GOOD and gOOd all count as a good idea). All inputs may not be strings.

SOLUTIONS
<?php 
function well($arr) {
    $c = substr_count(strtolower(serialize($arr)), 'good');
    if ($c > 2) return 'I smell a series!';
    if ($c == 1 || $c == 2) return 'Publish!';
    return 'Fail!';
}

// function well($arr)
// {
//     $count = 0;
//     array_walk_recursive($arr, function(&$item,$key) use (&$count) {$count += strtolower($item) == 'good' ? 1 : 0;});
//     return $count == 0 ? 'Fail!' : ($count > 2 ? 'I smell a series!' : 'Publish!');
// }

// function well($arr)
// {
//   $count = substr_count(strtolower(json_encode($arr)), 'good');
//   return !$count ? 'Fail!' : ($count <= 2 ? 'Publish!' : 'I smell a series!');
// }

// function well($arr)
// {
//   $count = 0;
//   foreach ($arr as $words) {
//     foreach ($words as $word) {
//       if (strtolower($word) === 'good') {
//         if (++$count > 2) {
//           return 'I smell a series!';
//         }
//       }
//     }
//   }
//   if ($count > 0) {
//     return 'Publish!';
//   }
  
//   return 'Fail!';
// }
