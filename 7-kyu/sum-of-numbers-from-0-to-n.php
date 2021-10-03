INSTRUCTIONS
We want to generate a function that computes the series starting from 0 and ending until the given number.

Example:
Input:
> 6
Output:
0+1+2+3+4+5+6 = 21
Input:
> -15
Output:
-15<0
Input:
> 0
Output:
0=0

SOLUTIONS
<?php
class SequenceSum {
    public function showSequence($count) {
      if ($count < 0) { 
        return "$count<0"; 
      }
      if ($count == 0) { 
        return "0=0"; 
      }
      $r = range(0, $count);
      return implode("+", $r) . " = " . array_sum($r);
    }
}

// class SequenceSum {
//     public function showSequence($n) {
//       return $n < 0 ? "$n<0" : ($n == 0 ? "0=0" : implode("+", range(0, $n)) . " = " . ($n * ($n + 1) / 2));
//     }
// } 