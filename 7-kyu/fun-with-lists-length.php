INSTRUCTIONS
Implement the method length, which accepts a linked list (head), and returns the length of the list.
For example: Given the list: 1 -> 2 -> 3 -> 4, length should return 4.
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
function length($head) {
    return $head == NULL ? 0 : 1 + length($head->next);
}

// function length($l) {
//     return is_null($l) ? 0 : 1 + length($l->next);
// }

// function length($head) {
//     return $head instanceof Node ? 1 + length($head->next) : null;
// }