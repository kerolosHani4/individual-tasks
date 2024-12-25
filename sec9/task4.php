<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PHP and JavaScript</title>
</head>
<body>
    <h1>Dynamic Script Example</h1>
    <?php
    $userRole = "admin";

    if ($userRole === "admin") {
        $script = "alert('Welcome, Admin! You have full access.');";
    } elseif ($userRole === "user") {
        $script = "alert('Welcome, User! You have limited access.');";
    } else {
        $script = "alert('Welcome, Guest! Please log in for more features.');";
    }
    ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php echo $script; ?>
    });
    </script>
</body>
</html>
