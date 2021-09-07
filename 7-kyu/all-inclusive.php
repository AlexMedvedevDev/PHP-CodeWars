INSTRUCTIONS
Input:

a string strng
an array of strings arr
Output of function contain_all_rots(strng, arr) (or containAllRots or contain-all-rots):

a boolean true if all rotations of strng are included in arr (C returns 1)
false otherwise (C returns 0)
Examples:
contain_all_rots(
  "bsjq", ["bsjq", "qbsj", "sjqb", "twZNsslC", "jqbs"]) -> true

contain_all_rots(
  "Ajylvpy", ["Ajylvpy", "ylvpyAj", "jylvpyA", "lvpyAjy", "pyAjylv", "vpyAjyl", "ipywee"]) -> false)
Note:
Though not correct in a mathematical sense

we will consider that there are no rotations of strng == ""
and for any array arr: contain_all_rots("", arr) --> true

SOLUTIONS
<?php 
function containAllRots($s, $arr) {
    foreach (str_split($s) as $char) {
        $s = substr($s, 1) . $char;
        if (!in_array($s, $arr)) return false;
    }
    return true;
}

// function containAllRots($s, $arr) {
//     for ($i = 0; $i < strlen($s); $i++){
//       if(array_search(substr($s, $i).substr($s, 0, $i), $arr) === false) return false;
//     }
//     return true;
// }