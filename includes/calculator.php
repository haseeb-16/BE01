
<?php

// 1. INITIALIZE RESULT VARIABLES

$calculationResult = null;
$calculationError = "";
$firstNumber = "";
$secondNumber = "";
$selectedOperation = "";


// 2. CHECK FORM SUBMISSION


// Check whether the calculator form was submitted.
if ($_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST["calculate"])) {

    // Receive values from the HTML form.
    $firstNumber = $_POST["first_number"] ?? "";
    $secondNumber = $_POST["second_number"] ?? "";
    $selectedOperation = $_POST["operation"] ?? "";

    // 3. INPUT VALIDATION

    // Check whether both inputs are numeric.
    if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {

        $calculationError = "Please enter valid numbers.";

    } else {

        // Convert input values into floating-point numbers.
        $num1 = (float) $firstNumber;
        $num2 = (float) $secondNumber;

    
        // 4. PERFORM CALCULATIONS
    

        switch ($selectedOperation) {

            case "addition":

                // Addition operator (+)
                $calculationResult = $num1 + $num2;
                break;

            case "subtraction":

                // Subtraction operator (-)
                $calculationResult = $num1 - $num2;
                break;

            case "multiplication":

                // Multiplication operator (*)
                $calculationResult = $num1 * $num2;
                break;

            case "division":

                // Prevent division by zero.
                if ($num2 == 0) {

                    $calculationError = "Division by zero is not allowed.";

                } else {

                    // Division operator (/)
                    $calculationResult = $num1 / $num2;
                }

                break;

            default:

                // Handle invalid operations.
                $calculationError = "Please select a valid operation.";
                break;
        }
    }
}

?>
