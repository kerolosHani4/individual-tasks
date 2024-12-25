<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Problem Solutions</title>
</head>
<body>
    <section>
        <h2>Student List</h2>
        <?php
        $studentIds = [101, 102, 103];
        $studentNames = ["Ahmed", "Mona", "Youssef"];
        $studentGrades = [90, 85, 88];

        echo "<ul>";
        for ($i = 0; $i < count($studentIds); $i++) {
            echo "<li>Student-{$studentIds[$i]} = Name: {$studentNames[$i]}, Grade: {$studentGrades[$i]}</li>";
        }
        echo "</ul>";
        ?>
    </section>

</body>
</html>
