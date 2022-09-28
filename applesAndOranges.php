<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
  //set counter for apples and oranges
  $countApples = 0;
  $countOranges = 0;

  //loop through apples array
  foreach ($apples as $apple) {
    //sum apple distance with tree position to know wheter the apples             falls into house or not
    $applePos = $apple + $a;
    //check if the apple position matches with house position
    if ($applePos >= $s && $applePos <= $t) {
      //add counter if position match
      $countApples++;
    }
  }
  //loop through oranges array
  foreach ($oranges as $orange) {
    //sum oranges distance with tree position to know wheter the oranges          falls into house or not
    $orangePos = $orange + $b;
    //check if the oranges position matches with house position
    if ($orangePos >= $s && $orangePos <= $t) {
      //add counter if position match
      $countOranges++;
    }
  }
  //show output
  echo $countApples . "\n" . $countOranges;

  //done
}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$s = intval($first_multiple_input[0]);

$t = intval($first_multiple_input[1]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$a = intval($second_multiple_input[0]);

$b = intval($second_multiple_input[1]);

$third_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($third_multiple_input[0]);

$n = intval($third_multiple_input[1]);

$apples_temp = rtrim(fgets(STDIN));

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

$oranges_temp = rtrim(fgets(STDIN));

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
