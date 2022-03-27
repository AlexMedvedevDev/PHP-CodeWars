INSTRUCTIONS
Linked Lists - Append
Write an Append() function which appends one linked list to another. The head of the resulting list should be returned.
$list_a = 1 -> 2 -> 3 -> NULL;
$list_b = 4 -> 5 -> 6 -> NULL;
append($list_a, $list_b) // returns 1 -> 2 -> 3 -> 4 -> 5 -> 6 -> NULL
If both listA and listB are null/NULL/None/nil, return null/NULL/None/nil. If one list is null/NULL/None/nil and the other is not, simply return the non-null/NULL/None/nil list.
The push() and buildOneTwoThree() (build_one_two_three() in PHP and ruby) functions need not be redefined. The Node class is also predefined for you in PHP.
/* PHP Only */
class Node {
  public $data, $next;
  public function __construct($data, $next = NULL) {
    $this->data = $data;
    $this->next = $next;
  }
}

SOLUTIONS
<?php
function append(?Node $a, ?Node $b): ?Node {
    if ($a === null) {
      return $b;
    }
    $a = new Node($a->data, $a->next);
    $head = $a;
    while ($a->next instanceof Node) {
      $a->next = new Node($a->next->data, $a->next->next);
      $a = $a->next;
    }
    $a->next = $b;
    return $head;
}