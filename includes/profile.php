
<?php

// 1. CONSTANTS

// Constants store values that should not change.
define("APP_NAME", "Personal Profile & Calculator");
define("COUNTRY", "Pakistan");

// 2. VARIABLES

// Personal information
$name = "Haseeb Ur Rehman"; // String
$age = 23; // Integer: replace with your age
$email = "haseebuurrehman2004@gmail.com"; // String
$city = "Lahore"; // String

// Education information
$degree = "BS Computer Science";
$university = "Information Technology University";

// 3. DIFFERENT DATA TYPES

// String
$profession = "Computer Science Graduate";

// Integer
$experience = 2;

// Float
$gpa = 3.3;

// Boolean
$isGraduate = true;

// Array
$skills = [
    "PHP",
    "JavaScript",
    "Python",
    "HTML",
    "CSS",
    "SQL"
];

// Object
$education = (object) [
    "degree" => $degree,
    "university" => $university,
    "status" => "Completed"
];

// NULL
$middleName = null;

// 4. TYPE CONVERSION

// Convert a numeric string into an integer.
$ageString = "22";
$convertedAge = (int) $ageString;

// 5. TYPE CHECKING

$nameType = gettype($name);
$ageType = gettype($age);
$gpaType = gettype($gpa);
$skillsType = gettype($skills);
$graduateType = gettype($isGraduate);

// Check whether a variable is an array.
$isSkillsArray = is_array($skills);

// 6. OPERATORS

// Arithmetic operator
$nextYearAge = $age + 1;

// Comparison operator
$isAdult = ($age >= 18);

// Logical operator
$profileComplete = ($name !== "" && $email !== "");

// Assignment operator
$experience += 1;

// 7. STRING CONCATENATION

$fullEducation = $degree . " - " . $university;

// 8. DEBUGGING EXAMPLES

// var_dump($name);
// var_dump($age);
// print_r($skills);

?>
