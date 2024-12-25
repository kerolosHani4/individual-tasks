<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies Example</title>
</head>
<body>
    <h1>PHP Cookies Example</h1>

    <?php
    if (!isset($_COOKIE['user'])) {
        $cookie_name = "user";
        $cookie_value = "John Doe";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        echo "Cookie is set!<br>";
    }

    if (isset($_COOKIE['user'])) {
        echo "Welcome back, " . $_COOKIE['user'] . "!<br>";
    } else {
        echo "Hello, Stranger!<br>";
    }

    echo "Cookie Name: " . $cookie_name . "<br>";
    echo "Cookie Value: " . (isset($_COOKIE['user']) ? $_COOKIE['user'] : "Not set yet") . "<br>";
    ?>
</body>
</html>
