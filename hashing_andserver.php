<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <input type="submit" value="Submit">
    </form>

</body>

</html>


<?php
//Server is a super global variable that holds information about headers, paths, and script locations.// 
/*
foreach ($_SERVER as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
    */


//hashing
$password = "password";
$hash = password_hash($password, PASSWORD_DEFAULT);
if (password_verify("hello", $hash)) {
    echo "Password is valid";
} else {
    echo "Password is invalid";
}

?>