<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">

<label for="name">name</label>
<input type="text" name="name"><br>
<label for="password">password</label>
<input type="password" name="password"><br>
<input type="submit" name="login">

</form>
    
</body>
</html>
<?php
$username= $_POST["name"];
$password= $_POST["password"];

/*
foreach ($_POST as  $key =>$value){
    echo "{$key}=>{$value}";
}*/

if(isset($_POST["login"])){

    /*
if(empty($username) || empty($password)){

    


    if(empty($username)){
        echo "Please enter a username<br>";
    }else{
        echo"Welcome $username <br>";

    }

 if(empty($password)){
        echo "Please enter a password<br>";
    }else{
        echo"Welcome $username <br>";
    }
   
}*/

if(empty($username)){
    echo "Please enter the username";
}elseif(empty($password)){
    echo "please enter the password";
}else{
    echo"Welcome {$username}";
}

}

?>