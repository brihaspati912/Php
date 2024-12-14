
<?php


$name="Raushan<br> ";
$age=21;
$quantity=4;
$price= 10.2;
$total=null;

echo "I am Raushan <br>" ;
echo "I am Mars ";
echo $name;
echo "$name $age ";
echo"I am {$age} years old<br>";
echo"I am buying {$quantity} pizza<br>" ;
$total= $quantity * $price;
echo "It costs \${$total} <br>";

//hello//
//Arithmatic
$x=10;
$y=2;
$z=null;
$w=null;

//$z= $x+$y;
echo $z;

$w=$x/$y;
echo" $w<br>";

///Increment operator//
$counter=10;

$counter+=5;
echo" $counter<br>";

/////Opertator Precedence(order given below):
///(),**,*,/,%,+,-
//
$totals= 1+2 -3*4/5**6;
echo $totals;


?>

