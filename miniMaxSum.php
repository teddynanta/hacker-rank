<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{
  //sort array ascending
  sort($arr);

  //sum every element on array
  $total = array_sum($arr);

  //in order to find minimum value, subtract the highest element from total value (highest element is the last element of array because of ascending sort we use earlier)
  $min = $total - end($arr);

  //in order to find maximum value, substract the lowest element from total value (lowest element is the first element of array because of ascending sort we use earlier)
  $max = $total - $arr[0];

  //show the output
  echo $min . " " . $max;

  //done
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
