INSTRUCTIONS
Given a 2D array of size m * n. 
Your task is to find the sum of minimum value in each row.

For Example:

[
  [1, 2, 3, 4, 5],       # minimum value of row is 1
  [5, 6, 7, 8, 9],       # minimum value of row is 5
  [20, 21, 34, 56, 100]  # minimum value of row is 20
]
```rust
[
  [1, 2, 3, 4],       # minimum value of row is 1
  [7, 6, 5, 8],       # minimum value of row is 5
  [20, 21, 34, 56]    # minimum value of row is 20
]
So, the function should return 26 because sum of minimums is as 1 + 5 + 20 = 26

SOLUTIONS
<?php
// function sum_of_minimums($numbers)
// {
//   $res = 0;
//   foreach($numbers as $n) {
//     $res += min($n);
//     }
  
//   return $res;
// }

function sum_of_minimums(array $numbers): int {
    return array_sum(array_map('min', $numbers));
}