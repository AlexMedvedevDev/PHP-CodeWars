INSTRUCTIONS
I have stacked some pool balls in a triangle.
Kata Task
Given the number of layers of my stack, what is the total height?
Return the height as multiple of the ball diameter.
Example
The image above shows a stack of 5 layers.
Notes
layers >= 0
approximate answers (within 0.001) are good enough

SOLUTIONS
<?php
function stackHeight2d($layers) {
    return $layers == 0 ? $layers : 1 + sqrt(3) * ($layers - 1) / 2;
}

// function stackHeight2d($layers)
// {
//   return $layers > 1 ?
//     1 + round(sqrt(1**2 - (1**2/4)) * ($layers - 1), 3) : ($layers == 1 ? 1 : 0);
// }

// function stackHeight2d($layers) {
//     return $layers > 0 ? 1 + ($layers - 1) * 3 ** 0.5 / 2 : 0;
// }

// function stackHeight2d($layers) {
//     if ($layers == 0) {
//       return 0;
//     } else {
//       return (1 + ($layers-1) * 3**0.5 / 2);
//     }
// }