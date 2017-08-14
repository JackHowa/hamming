<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
  $hamCount = 0;
  for ($i = 0; $i < strlen($a); $i++){
    if ($a != $b) {
      // doesn't match single one 
      $hamCount += 1;
    }
  }
  return $hamCount; 
}
