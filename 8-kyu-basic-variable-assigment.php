INSTRUCTIONS
This code should store "codewa.rs" as a variable called name but it's not working. 
Can you figure out why?

SOLUTIONS
<?php
$a = "code";
$b = "wa.rs";
$name = "$a" . "$b";

// $a = "code";
// $b = "wa.rs";
// $name = $a . $b;

// $GLOBALS['name'] = 'codewa.rs';

// global $name;
// $name = 'codewa.rs';

// $a = [99,111,100,101,119,97,46,114,115];
// $name = implode('', array_map(function($l){return chr($l);}, $a));

// $a = "code";
// $b = "wa.rs";
// return $name = "$a$b";