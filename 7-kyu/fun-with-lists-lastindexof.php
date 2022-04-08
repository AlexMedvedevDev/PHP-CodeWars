INSTRUCTIONS
Implement the method lastIndexOf (last_index_of in PHP), which accepts a linked list (head) and a value, and returns the index (zero based) of the last occurrence of that value if exists, or -1 otherwise.
For example: Given the list: 1 -> 2 -> 3 -> 3, and the value 3, lastIndexOf / last_index_of should return 3.
The linked list is defined as follows:
class Node {
  public $data, $next;
  public function __construct($data, $next = NULL) {
    $this->data = $data;
    $this->next = $next;
  }
}
Note: the list may be null and can hold any type of value.

SOLUTIONS
<?php
function last_index_of($head, $value, $cnt = 0, $idx =-1) {
    while($head){if($head->data===$value)$idx= $cnt; ++$cnt; $head = $head->next;}
    return $idx;
}

// function last_index_of($head, $value) {
//     $index = 0;
//     $lastIndex = -1;
//     while ($head) {
//       if ($head->data === $value) {
//         $lastIndex = $index;
//       }
//       $head = $head->next;        
//       $index += 1;
//     }
//     return $lastIndex;
// }

// function last_index_of($head, $value) {
//     $index = -1;
//     for ($count = 0; $head !== NULL; $head = $head->next, $count++) {
//         if ($head->data === $value) {
//             $index = $count;
//         }
//     }
//     return $index;
// }