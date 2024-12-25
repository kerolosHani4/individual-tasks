<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <h1>PHP Tutorial</h1>

    <section>
        <h2>Introduction</h2>
        <?php
        echo "Welcome to the PHP tutorial!";
        ?>
    </section>

    <section>
        <h2>Comments</h2>
        <?php
        echo "This is a single-line comment.";
        echo "This is a multi-line comment.";
        ?>
    </section>

    <section>
        <h2>Variables</h2>
        <?php
        $name = "John";
        $age = 25;
        $isStudent = true;
        echo "Name: $name, Age: $age, Student: $isStudent";
        ?>
    </section>

    <section>
        <h2>Data Types</h2>
        <?php
        $integerVar = 10;
        $floatVar = 3.14;
        $stringVar = "Hello, world!";
        $booleanVar = true;
        $arrayVar = array(1, 2, 3);
        echo "$integerVar, $floatVar, $stringVar, $booleanVar";
        ?>
    </section>

    <section>
        <h2>Operators</h2>
        <?php
        $sum = 10 + 5;
        $difference = 10 - 5;
        $product = 10 * 5;
        $quotient = 10 / 5;
        $remainder = 10 % 3;
        $increment = ++$sum;
        $decrement = --$sum;
        echo "Sum: $sum, Difference: $difference, Product: $product, Quotient: $quotient, Remainder: $remainder";
        ?>
    </section>

    <section>
        <h2>if Statements</h2>
        <?php
        $age = 18;
        if ($age >= 18) {
            echo "You are an adult.";
        } else {
            echo "You are a minor.";
        }
        ?>
    </section>

</body>
</html>
