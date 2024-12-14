<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
<label for="x">x</label>
<input type="text" name="x" >
<br>

<label for="y">y</label>
<input type="text" name="y" >
<br>


<label for="z">z</label>
<input type="text" name="z" >
<br>


<label for="radius">radius</label>
<input type="text" name="radius" >
<br>





<input type="submit" value="total">


    </form>
</body>
</html>



<?php

$x =$_POST["x"] ;
$y =$_POST["y"] ;
$z =$_POST["z"] ;

$radius =$_POST["radius"] ;
$area=null;
$volume=null ;
$circumferance =null;


$total=null;
$circumferance=2*pi()*$radius ;
$circumferance=round($circumferance,2);
$volume=4/3*pi()*pow($radius,3);

$area= pi()* pow($radius,2);



//$total=abs($x);
//$total= round(  $x);

//$total = floor($x);

//$total = ceil($x);

//$total=pow($x,$y);
//$total=sqrt($x);
//$total=max($x,$y,$z);
//$total=min($x,$y,$z);
//$total=pi();
//$total=rand(1,6);



//echo ($total);

echo "c={$circumferance} <br>";
echo "v={$volume} <br>";
echo "a={$area}";

?>


