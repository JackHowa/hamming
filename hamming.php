<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
  $hamCount = 0;
  if (strlen($a) == strlen($b)) {
    for ($i = 0; $i < strlen($a); $i++){

    // have to find the index of each string with [$i]
    if ($a[$i] != $b[$i]) {
      // doesn't match 
      $hamCount += 1;
    }
    }
  return $hamCount; 
  }
  else {
    // struggled in invalid 
    // help via https://stackoverflow.com/questions/28853513/phpunit-test-cases-for-invalidargumentexception
    throw new \InvalidArgumentException('DNA strands must be of equal length.');
  }
  
}
