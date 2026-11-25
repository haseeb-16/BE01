
<?php

// Include personal information.
require_once __DIR__ . "/includes/profile.php";

// Include calculator functionality.
require_once __DIR__ . "/includes/calculator.php";

// Helper function to safely display text in HTML.
function escapeHTML($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="PHP Personal Profile and Calculator">

    <title><?php echo escapeHTML(APP_NAME); ?></title>

    <!-- Connect external CSS file -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- HEADER SECTION -->

    <header class="header">

        <div class="container">

            <h1>
                <?php echo escapeHTML(APP_NAME); ?>
            </h1>

            <p>My First PHP Application</p>

        </div>

    </header>


    <main class="container">

        <!-- PERSONAL PROFILE SECTION -->

        <section class="card profile-section">

            <h2>Personal Information</h2>

            <div class="profile-details">

                <div class="detail">
                    <strong>Name:</strong>
                    <span><?php echo escapeHTML($name); ?></span>
                </div>

                <div class="detail">
                    <strong>Age:</strong>
                    <span><?php echo escapeHTML($age); ?></span>
                </div>

                <div class="detail">
                    <strong>Email:</strong>
                    <span><?php echo escapeHTML($email); ?></span>
                </div>

                <div class="detail">
                    <strong>City:</strong>
                    <span><?php echo escapeHTML($city); ?></span>
                </div>

                <div class="detail">
                    <strong>Country:</strong>
                    <span><?php echo escapeHTML(COUNTRY); ?></span>
                </div>

                <div class="detail">
                    <strong>Profession:</strong>
                    <span><?php echo escapeHTML($profession); ?></span>
                </div>

                <div class="detail">
                    <strong>Education:</strong>

                    <span>
                        <?php
                        echo escapeHTML($education->degree);
                        echo " - ";
                        echo escapeHTML($education->university);
                        ?>
                    </span>

                </div>

            </div>


            <!-- Display skills using a PHP foreach loop -->

            <h3>My Skills</h3>

            <div class="skills-list">

                <?php foreach ($skills as $skill): ?>

                    <span class="skill">
                        <?php echo escapeHTML($skill); ?>
                    </span>

                <?php endforeach; ?>

            </div>

        </section>


        <!-- CALCULATOR SECTION -->

        <section class="card calculator-section">

            <h2>Basic Calculator</h2>

            <p>Enter two numbers and select an operation.</p>


            <!-- Calculator Form -->

            <form method="POST" action="">

                <div class="form-group">

                    <label for="first_number">
                        First Number
                    </label>

                    <input
                        type="number"
                        step="any"
                        id="first_number"
                        name="first_number"
                        placeholder="Enter first number"
                        value="<?php echo escapeHTML($firstNumber); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="second_number">
                        Second Number
                    </label>

                    <input
                        type="number"
                        step="any"
                        id="second_number"
                        name="second_number"
                        placeholder="Enter second number"
                        value="<?php echo escapeHTML($secondNumber); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="operation">
                        Select Operation
                    </label>

                    <select id="operation" name="operation" required>

                        <option value="">Choose an operation</option>

                        <option value="addition"
                            <?php echo ($selectedOperation === "addition") ? "selected" : ""; ?>>
                            Addition (+)
                        </option>

                        <option value="subtraction"
                            <?php echo ($selectedOperation === "subtraction") ? "selected" : ""; ?>>
                            Subtraction (-)
                        </option>

                        <option value="multiplication"
                            <?php echo ($selectedOperation === "multiplication") ? "selected" : ""; ?>>
                            Multiplication (*)
                        </option>

                        <option value="division"
                            <?php echo ($selectedOperation === "division") ? "selected" : ""; ?>>
                            Division (/)
                        </option>

                    </select>

                </div>


                <button type="submit" name="calculate">
                    Calculate
                </button>

            </form>


            <!-- Display calculation result or error -->

            <?php if ($calculationError !== ""): ?>

                <div class="message error">

                    <?php echo escapeHTML($calculationError); ?>

                </div>

            <?php elseif ($calculationResult !== null): ?>

                <div class="message success">

                    <h3>Calculation Result</h3>

                    <p>
                        <?php
                        echo escapeHTML($firstNumber);
                        echo " ";
                        echo escapeHTML($selectedOperation);
                        echo " ";
                        echo escapeHTML($secondNumber);
                        echo " = ";
                        echo escapeHTML($calculationResult);
                        ?>
                    </p>

                    <p>
                        <strong>Answer:</strong>
                        <?php echo escapeHTML($calculationResult); ?>
                    </p>

                </div>

            <?php endif; ?>

        </section>


        <!-- PHP DATA TYPES AND DEBUGGING -->

        <section class="card debugging-section">

            <h2>PHP Data Types & Debugging</h2>

            <p>
                This section demonstrates PHP debugging functions
                and different variable data types.
            </p>

            <details>

                <summary>View PHP Debugging Information</summary>

                <h3>Using print_r()</h3>

                <pre><?php print_r($skills); ?></pre>

                <h3>Using var_dump()</h3>

                <pre><?php
                    var_dump($name);
                    var_dump($age);
                    var_dump($gpa);
                    var_dump($isGraduate);
                    var_dump($skills);
                    var_dump($education);
                    var_dump($middleName);
                ?></pre>

                <h3>Using gettype()</h3>

                <pre><?php
                    echo "Name type: " . $nameType . "\n";
                    echo "Age type: " . $ageType . "\n";
                    echo "GPA type: " . $gpaType . "\n";
                    echo "Skills type: " . $skillsType . "\n";
                    echo "Graduate type: " . $graduateType . "\n";
                ?></pre>

                <h3>Using print</h3>

                <p>
                    <?php print "PHP is a server-side programming language."; ?>
                </p>

            </details>

        </section>


    </main>


    <!-- FOOTER -->

    <footer class="footer">

        <p>
            &copy; <?php echo date("Y"); ?>

            <?php echo escapeHTML(APP_NAME); ?>

        </p>

        <p>Developed using PHP, HTML and CSS.</p>

    </footer>

</body>

</html>
