<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        email:<br>

        <input type="email" name="email"><br>
        age:<br>
        <input type="text" name="age"><br>
        <button type="submit" name="login">Login</button><br>

    </form>
</body>

</html>
<?php

if (isset($_POST["login"])) {
    //You should sanitize as well as validate inputs
    //SANITIZE
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    $useremail = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo ("hello Mr {$username}<br>");

    echo ("Your email is {$useremail} <br>");


    //VALIDATE
    $userage = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    if (empty($userage)) {
        echo ("Please enter valid age");
    } else {
        echo ("Your age is {$userage}");
    }
    $useremail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($useremail)) {
        echo ("Please enter valid email");
    } else {
        echo ("Your age is {$useremail}");
    }
}
?>
