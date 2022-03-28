INSTRUCTIONS
Implement the method indexOf (index_of in PHP), which accepts a linked list (head) and a value, 
and returns the index (zero based) of the first occurrence of that value if exists, or -1 otherwise.
For example: Given the list: 1 -> 2 -> 3 -> 3, and the value 3, indexOf / index_of should return 2.
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
function index_of($head, $value, $index = 0) {
    if ($head === NULL ) return -1;
    if ($head->data === $value) return $index;
    return index_of($head->next, $value, $index + 1);
}

// function index_of($head, $value) {
//     $index = 0;
//     while ($head !== NULL) {
//         if($head->data === $value){
//         return $index;
//         }
//         $head = $head->next;
//         $index = $index+1;
//     }    
//     return -1;
// }

// function index_of($head, $value) {
//     $res = 0;
//     while($head){
//       if($head->data===$value){ return $res;}
//       $head = $head->next;
//       $res++;
//     }
//     return -1;
// }