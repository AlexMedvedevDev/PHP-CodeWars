INSTRUCTIONS
Thanks to the effects of El Nino this year my holiday snorkelling trip was akin to being in a washing machine... Not fun at all.
Given a string made up of '~' and '_' representing waves and calm respectively, your job is to check whether a person would become seasick.
Remember, only the process of change from wave to calm will add to the effect (really wave peak to trough but this will do). 
Find out how many changes in level the string has and if that figure is more than 20% of the array, return "Throw Up", if less, return "No Problem".

SOLUTIONS
<?php
// function sea_sick(string $s): string {
//     $count = 0;
//     for ($i = 0; $i < strlen($s) - 1; $i++) {
//       if ($s[$i] !== $s[$i+1]) {
//         $count++;
//       }
//     }
//     if ($count / strlen($s) > 0.2) {
//       return "Throw Up";
//     }
//     return "No Problem";
// }

function sea_sick(string $s): string {
    return substr_count($s,'_~')+substr_count($s,'~_')>strlen($s)/5?'Throw Up':'No Problem';
}