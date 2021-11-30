INSTRUCTIONS
Bob needs a fast way to calculate the volume of a cuboid with three values: length, width and the height of the cuboid. 
Write a function to help Bob with this calculation.

SOLUTIONS
<?php
$kata = new class {
    public function get_volume_of_cuboid($length, $width, $height) {
      return $length * $width * $height;
    }
};

// $kata = new class {
//     public function get_volume_of_cuboid(...$volume) {
//       return array_product($volume);
//     }
// };