INSTRUCTIONS
Here we have a function that help us spam our hearty laughter. But is not working! I need you to find out why...

Expected results:

spam(1);  // 'hue'
spam(6);  // 'huehuehuehuehuehue'
spam(14); // 'huehuehuehuehuehuehuehuehuehuehuehuehuehue'

SOLUTIONS
<?php
function spam(int $n): string {
    return str_repeat("hue", $n);
}

// function spam(int $n): string 
// {
//   $hue = "";
//   for ($i = 0; $i < $n ; $i++)  
//       $hue.="hue";  
//   return  $hue;
// }

// function spam(int $n): string {
//     return join(array_fill(0, $n, 'hue'));
// }

// function spam(int $n): string {
//     $result = "";
//     while ($n --) $result .= "hue";
//     return $result;
// }