INSTRUCTIONS
A pangram is a sentence that contains every single letter 
of the alphabet at least once. For example, the sentence 
"The quick brown fox jumps over the lazy dog" is a pangram, 
because it uses the letters A-Z at least once (case is irrelevant).
Given a string, detect whether or not it is a pangram. 
Return True if it is, False if not. 
Ignore numbers and punctuation.
SOLUTIONS
<?php 
    // function detect_pangram($string) { 
    //     $sentences = strtolower(trim($string));
    //         $letters = str_split("thequickbrownfoxjumpsoverthelazydog");
    
    //         foreach ($letters as $letter) {
    //             if (!strstr($sentences, $letter))
    //                 return false;
    //         }
    
    //         return true;
    //     }

    function detect_pangram($string) { 
        $alphabet = range('a', 'z'); //range — Create an array containing a range of elements
        $thisString = str_split(strtolower($string));
        return empty(array_diff($alphabet, $thisString)) ? true : false;
        }
?>