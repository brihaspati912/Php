<?php
//session is a super global variable use to store store information
//across multipage.user is assigned a session_id
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Index page</a><br>
    <a href="home.php">home page</a><br>

    <form action="index.php" method="POST">
        username:<br>
        <input type="text" name="username" id="username" required><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">

    </form>


</body>

</html>

<?php

if (isset($_POST['submit'])) {

    if (!empty($_POST['username'] && !empty($_POST['password']))) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('location:home.php');
        exit();
    }
} else {
    echo "username and password not set";
}
?>