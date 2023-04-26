<?php

  //initializing variables
  $cost = "Please make a selection above.";

  //declaring and defining variables
  $userAge = intval($_POST["user-age"]);
  $day = $_POST["day"];

  //setting constants for age thresholds
  define("CHILD_FREE", 5);
  define("ELDERLY_FREE", 95);
  define("STUDENT_MINIMUM", 12);
  define("STUDENT_MAXIMUM", 21);

//if: if user enters a negative integer for their age
if ($userAge < 0) {
   $cost = "Please enter a valid age.";
 }

   //else if: if user does not enter age tell them to please enter age
else if (empty($userAge)) {
    $cost = "Please enter age.";
}

  //else if: if user does not enter a day of the week
 else if ($day == "Day of week") {
   $cost = "Please enter a day of the week.";
 }

  //using compound if statements to determine cost
 else if (($userAge < CHILD_FREE) || ($userAge > ELDERLY_FREE)) {
   $cost = "You can visit the museum for free!";
 }

 //elseif: if age is between 12 and 21 OR the day is Tuesday or Thursday.
 else if ((($userAge >= STUDENT_MINIMUM) && ($userAge <= STUDENT_MAXIMUM)) || (($day == "Thursday") || ($day == "Tuesday"))) {
   $cost = "You get a student discount.";
 }

 else {
   $cost = "You are not eligible for a discount and must pay the full price.";
 }

  //displaying the appropriate cost to the screen
  echo "$cost";
?>