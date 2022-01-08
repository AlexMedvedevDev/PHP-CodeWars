INSTRUCTIONS
This function should take two string parameters: a person's name (name) and a quote of theirs (quote), and return a string attributing the quote to the person in the following format:
'[name] said: "[quote]"'
For example, if name is 'Grae' and 'quote' is 'Practice makes perfect' then your function should return the string
'Grae said: "Practice makes perfect"'
Unfortunately, something is wrong with the instructions in the function body. Your job is to fix it so the function returns correctly formatted quotes.

SOLUTIONS
<?php
function quotable($name, $quote) {
    return $name . " said: ". '"'. $quote .'"';
}

// function quotable($name, $quote)
// {
//     return  $name . ' ' . 'said:' . ' ' .  '"' . $quote . '"';
// }

// function quotable($name, $quote) {
//     $string = "$name said: \"$quote\"";
//       return $string;
// }

// function quotable($name, $quote): string {
//     $str = $name . ' said: "' . $quote. '"' ;
//     return (string) $str;
// }