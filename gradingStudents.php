<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades)
{
  //loop through each grades
  for ($i = 0; $i < count($grades); $i++) {
    //check if grades is 38 or higher (since grade below 38 will not rounded up)
    if ($grades[$i] >= 38) {
      //use modulo to check how far the grades from next 5 multiplier (just check it with calculator, you will see the pattern)
      $mod = $grades[$i] % 5;
      if ($mod == 3) {
        //round up the grades
        $grades[$i] += 2;
      } elseif ($mod == 4) {
        //round up the grades
        $grades[$i] += 1;
      }
    }
  }
  //show the output
  return $grades;

  //done
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
  $grades_item = intval(trim(fgets(STDIN)));
  $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
