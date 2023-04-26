<?php

//Setting constants for ages: children are a maximum of 5, elderly people are a minimum of 95 and students are between 12 & 21
define("CHILD_FREE", 5);
define("ELDERLY_FREE", 95);
define("STUDENT_MINIMUM", 12);
define("STUDENT_MAXIMUM", 21);

//Define cost that will be displayed as result later on
$cost = "";

//Get the user's age and the day of the week from input form
$userAge = intval($_POST["user-age"]);
$day = $_POST["day"];

//If age is less than 0, display that they must enter a valid age
if ($userAge < 0) {
    $cost = "Please enter a valid age.";
} 

//If the user does not enter their age, say that they must enter their age
elseif (empty($userAge)) {
    $cost = "Please enter age.";
} 

//Otherwise, if the user does not enter the day of the week, display that they must enter day of the week
elseif ($day == "Day of week") {
    $cost = "Please enter a day of the week.";
} 

//Otherwise, if the user is under 5 OR over 95 years old, display that they get in to the museum for free
elseif (($userAge < CHILD_FREE) || ($userAge > ELDERLY_FREE)) {
    $cost = "You can visit the museum for free!";
} 

//Otherwise, if the user is between 12 and 21 years old, OR if it is Tuesday or Thursday, display that they get a discount
elseif ((($userAge >= STUDENT_MINIMUM) && ($userAge <= STUDENT_MAXIMUM)) || (($day == "Thursday") || ($day == "Tuesday"))) {
    $cost = "You get a student discount.";
}

//Else, display that they do not get a discount at all
else {
    $cost = "You are not eligible for a discount and must pay the full price.";
}

// Display the museum pass the user gets
echo "$cost";
