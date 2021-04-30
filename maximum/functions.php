<?php

//NUMBER 1 PS: ERROR
function third_side($triangle1, $triangle2, $c)
{
    $angle = cal_cos($c);
    return sqrt(($triangle1 * $triangle1) + ($triangle2 * $triangle2) - 2 * $triangle1 * $triangle2 * $angle);
}



// NUMBER 2
function countAllOnes($num)
{
 
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0";
  }
  $count = 0;

  while ($num) {
    $count += $num & 1;
    $num >>= 1;
  }

  return $count;
}



// NUMBER 3
{
  $sepa = array($srate, $prate);
  echo implode (" / ", $sepa);
}


// NUMBER 4
function isSastry($num)
{
  $result = "FALSE";

  
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0";
  }

  $num = $num . $num + 1;
  
  $sr = sqrt($num);
  if(($sr - floor($sr)) == 0){
    $result = "TRUE";
  }

  return  $result;
}

?>