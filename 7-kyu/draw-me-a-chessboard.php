INSTRUCTIONS
Your task is to write a function that takes two integers rows and columns and returns a chessboard pattern as a two dimensional array.
So chessBoard(6,4) should return an array like this:
[
    ["O","X","O","X"],
    ["X","O","X","O"],
    ["O","X","O","X"],
    ["X","O","X","O"],
    ["O","X","O","X"],
    ["X","O","X","O"]
]
And chessBoard(3,7) should return this:
[
    ["O","X","O","X","O","X","O"],
    ["X","O","X","O","X","O","X"],
    ["O","X","O","X","O","X","O"]
]
The white spaces should be represented by an: 'O'
and the black an: 'X'
The first row should always start with a white space 'O'

SOLUTIONS
<?php
function chessBoard($rows, $columns) {
    $chessboard = [];
    for ($i = 0; $i < $rows; $i++) {
      for($j = 0; $j < $columns; $j++) {
        $chessboard[$i][$j] = ($i + $j) % 2 ? "X" : "O";
      }
    }
    return $chessboard; 
}

// function chessBoard($rows, $columns) {
//     $result = [];
//     for ($i = 0; $i < $rows; $i++) array_push($result, array_map(function ($i) {return $i % 2 ? "X" : "O";}, range($i, $i + $columns - 1)));
//     return $result;
// }

// function chessBoard($rows, $cols) {
//     return array_map(
//       function($r) use ($cols) {
//         $str = $r % 2 ? "OX" : "XO";
//         return str_split(substr(str_repeat($str, ceil($cols/2)), 0, $cols));
//       },
//       range(1, $rows)
//     );
// }