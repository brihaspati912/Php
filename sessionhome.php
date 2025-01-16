<?php
//session is a super global variable use to store store information
//across multipage.user is assigned a session_id
session_start();

echo "{$_SESSION['username']}<br>";

echo "{$_SESSION['password']}";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/">Index page</a><br>
    <a href="/home">home page</a><br>
    <p>This is home</p>

    <form action="home.php" method="POST">
        <input type="submit" name="logout">
    </form>


</body>

</html>
<?php

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
}

?>