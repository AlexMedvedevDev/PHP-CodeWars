INSTRUCTIONS
Vowel harmony is a phenomenon in some languages. It means that "A vowel or vowels in a word are changed to sound the same (thus "in harmony.")" (wikipedia). This kata is based on vowel harmony in Hungarian.
Task:
Your goal is to create a function dative() (Dative() in C#) which returns the valid form of a valid Hungarian word w in dative case i. e. append the correct suffix nek or nak to the word w based on vowel harmony rules.
Vowel Harmony Rules (simplified)
When the last vowel in the word is
a front vowel (e, é, i, í, ö, ő, ü, ű) the suffix is -nek
a back vowel (a, á, o, ó, u, ú) the suffix is -nak
Examples:
dative("ablak"); // "ablaknak"
dative("szék"); // "széknek"
dative("otthon"); // "otthonnak"
Preconditions:
To keep it simple: All words end with a consonant :)
All strings are unicode strings.
There are no grammatical exceptions in the tests.

SOLUTIONS
<?php
function dative(string $w): string {
    return $w . (preg_match("/[eéiíöőüű][^aáoóuú]*$/", $w) ? "nek" : "nak");
}

// function dative( string $w ): string {
//     return in_array( mb_substr( preg_replace( '/[^aáóuúoeéiíöőüű]/', '', $w ), -1 ), [ "a", "á", "ó", "u", "ú", 'o' ] ) ? $w.'nak':$w.'nek'; // mb_substr — Get part of string
// }

// function dative(string $w): string {
//     str_replace(['a', 'á', 'o', 'ó','u', 'ú'],'',$w,$count);
//     return $w.($count > 0 ? 'nak' : 'nek');
// }