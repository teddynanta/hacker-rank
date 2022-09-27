<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles)
{
  //ascending sort the elements
  sort($candles);

  //initialize counter
  $count = 0;

  //loop each elements
  for ($i = 0; $i < count($candles); $i++) {

    //since we sort the element to highest we can compare value of current element with the last element(highest value)
    if ($candles[$i] == end($candles)) {
      //add counter
      $count++;
    }
  }

  //show the output
  return $count;

  //done
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
