<?php

//if statement
//= assignment operator
//== comparison operator
///pay attention to the order of your if else statements

////

$age=101;

if($age>= 100){
    echo "you are too old to drive ";
}
else if ($age>=15){
echo"you are allowed to drive";
}
else if ($age<=0){
    echo"entre valid age";
}
else{
echo"hello";
}

$adult=true;

if($adult){
    echo "<br>enter";
}else{
    echo "no entry";
}


$hours=50;
$rate=15;
$week_pay= null;

if($hours<=0){
$week_pay=0;
echo "<br>you made this week \${$week_pay}";
}else if($hours<=40){
    $week_pay= $hours * $rate;
    echo "<br>your wage is \${$week_pay}";

}else{
    $week_pay= ($rate*40) + (($hours - 40)*($rate*1.5));
    echo"your week pay is \${$week_pay}";
}



?>