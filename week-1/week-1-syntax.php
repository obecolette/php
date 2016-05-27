<?php

$varName = "BRAD FRANCIS MACGOVERN";

// Pretend that we didn't define it

/*
for multi
lines
*/


// $varName = strtolower($varName);
// $varName = ucwords($varName);
// $varName = trim ($varName);

$varName = trim(ucwords(strtolower($varName)));

// Capitialize the letter after "Mc"
$mcPosition = strpos($varName, "Mc");
if($mcPosition) {
	// echo "the position of the Mc is: ".$mcPosition."<br>";
	$varName[$mcPosition+2] = strtoupper($varName[$mcPosition+2]);
}	

// Capitize the letter after "Mac"
$macPosition = strpos($varName, "Mac");
if($macPosition) {
	// echo "the position of the Mac is: ".$macPosition."<br>";
	$varName[$macPosition+3] = strtoupper($varName[$macPosition+3]);
}

echo "hello, my name is ";
 
$nameArray = explode(" ",$varName);

foreach($nameArray as $piece) {
	echo $piece." ";
}
