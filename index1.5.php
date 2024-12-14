
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form action="index.php" method="post">
    <input type="submit" value="stop">
</form>

<?php 

/////while loops///


$counter=0;
while($counter<10){
$counter++;
echo $counter ."<br/>";
}


$second=0;
$running=false;


while($running){
if(isset($_POST["stop"])){
$running=false;

}else{
    //wait1 second
    $second++;
    echo $second."<br/>";

}
}


?>