INSTRUCTIONS
Implement the methods anyMatch (any_match in PHP) & allMatch (all_match in PHP), which accepts a linked list (head) and a predicate function, and returns true if any / all of the elements apply to the given predicate.
For example:
Given the list: 1 -> 2 -> 3, and the predicate x => x > 1, anyMatch / any_match should return true (both 2 & 3 are valid for this predicate), and allMatch / all_match should return false (1 is not valid for this predicate)
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
function any_match($head, $p) {
    while($head) {
      if ($p($head->data)) {
        return true;
      }
      $head = $head->next;
    }
    return false;
  }
  function all_match($head, $p) {
    while($head) {
      if (!$p($head->data)) {
        return false;
      }
      $head = $head->next;
    }
    return true;
}

// function any_match($h, $f) {
//     return is_null($h) ? false : ($f($h->data) ? true : any_match($h->next, $f));
//   }
//   function all_match($h, $f) {
//     return is_null($h) ? true : ($f($h->data) ? all_match($h->next, $f) : false);
// }