INSTRUCTIONS
Your job is to check that the provided list of stations contains all of the stops Alan mentions. There will be other stations in the array. Example:

['Rejection', 'Disappointment', 'Backstabbing Central', 'Shattered Dreams Parkway']
If the stations all appear, return 'Smell my cheese you mother!', if not, return 'No, seriously, run. You will miss it. '.

SOLUTIONS
<?php
function alan(array $a): string {
    $station = ["Rejection", "Disappointment", "Backstabbing Central", "Shattered Dreams Parkway"];
    foreach ($station as $stop)
    if (in_array($stop, $a)) {
      return "Smell my cheese you mother!";
    } else {
    return "No, seriously, run. You will miss it."; 
    }
}

// function alan(array $a): string {
//     $station = ["Rejection", "Disappointment", "Backstabbing Central", "Shattered Dreams Parkway"];
//     foreach ($station as $stop) {
//     if (in_array($stop, $a)) {
//       return "Smell my cheese you mother!";
//       };
//       return "No, seriously, run. You will miss it.";
//     };   
//   }