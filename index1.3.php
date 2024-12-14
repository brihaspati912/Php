<?php
//Logical operator

$temp= -2500;
$cloudy=true;

/*if ($temp>=10 && $temp<=30){
    echo "its good";
}else{
    echo"its bad";
}*/


if($temp<0 || $temp>30){
    echo "its not good";
}else{
    echo "its good";
}

if(!$cloudy){
    echo "<br>its cloudy hi";
}else{
    echo"<br>its not cloudy";
}



$age=23;
$vote=true;

if(!$age >=18 || !$vote==true){
    echo"cannot vote";

}else{
    echo "you can vote";
}



$child=false;
$senior=false;
$ticket=null;

if(!$child || $senior){
    $ticket=15;
}else{
    $ticket=10;
}

echo"this ticket price is \${$ticket}";



//switch

$date=date("1");
$date="Friday";

switch ($date){
    case "Monday":
        echo "Its time to work";
        break;
    case "Tuesday":
        echo "Its work";
        break;
    case "Wednesday":
        echo "Its half to work";
        break;
     case "Thursday":
        echo "Its almost done";
        break;
     case "Friday":
        echo "Its time to leave";
        break;
     case "Saturday":
        echo "Its time to study";
        break;
     case "Sunday":
        echo "Its time to relax";
        break;
    default:
        echo"Please enter a valid";
}

?>