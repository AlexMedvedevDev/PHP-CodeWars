INSTRUCTIONS

You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising. The list is ordered according to who signed up first.
Your task is to return one of the following strings:
< firstName here >, < country here > of the first Python developer who has signed up; or
There will be no Python developers if no Python developer has signed up.

SOLUTIONS
<?php
function get_first_python($a) {
    foreach($a as $developer) {
      if ($developer['language'] == 'Python') {
         return "{$developer['first_name']}, {$developer['country']}";
            }
         }
       return "There will be no Python developers";
}

// function get_first_python($a) {
//     $key = array_search('Python',array_column($a, 'language'));
//     return ($key === false) ? 'There will be no Python developers' : $a[$key]['first_name'].', '.$a[$key]['country'];
// }

// function get_first_python(array $list): string {
//     $no_python = 'There will be no Python developers';
//     $res = array_values(array_filter($list, fn($x) => ($x['language'] == 'Python')));
//     return count($res) ? "{$res[0]['first_name']}, {$res[0]['country']}" : $no_python;
// }