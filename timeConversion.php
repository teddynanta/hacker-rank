<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
  //separate between hour, time, and second
  $time = explode(":", $s);
  $hour = $time[0];
  $minute = $time[1];
  $second = $time[2];

  //check if hour is 12 and time is AM, and change it to 00
  if ($hour == 12 && strpos($s, "AM") == true) {
    $hour = "00";
  }
  //check if time is PM, and add 12 hour to make it 24 hour format
  if (strpos($s, "PM") == true) {
    $hour = $hour + 12;
    //if hour is 24, make it 12 (since 12 PM is noon)
    if ($hour == 24) {
      $hour = "12";
    }
  }
  //concatenate the hour, minute, and second. remove the AM/PM string from the second using substr()
  $timeNow = $hour . ":" . $minute . ":" . substr($second, 0, -2);
  //display the result
  return $timeNow;
  //done
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
