///radio button////



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

<input type="radio" name="credit__card" value="visa">Visa<br>

<input type="radio" name="credit__card" value="mastercard">mastercard <br>
    
<input type="radio" name="credit__card" value="paytm">paytm<br>
<input type="submit" name="confirm" value="confirm">


    </form>
    
</body>
</html>

<?php
//name(in the input tag) is important for post checking in php. 
$credit__card= null;


if(isset( $_POST["confirm"])){/* check if submit button is clicked*/
    


    if(isset($_POST["credit__card"])){/* check if radio checked and  clicked*/


        $credit__card=$_POST["credit__card"]; /* check which radio button is selected*/
        
    }

    /*
    if($credit__card=="mastercard"){
        echo "You have selected {$credit__card}" ;
    }elseif($credit__card=="visa"){
        echo "You have selected {$credit__card}" ;
    }elseif($credit__card=="paytm"){
        echo "You have selected {$credit__card}" ;
    }else{
        echo "please select your credit card";
    }
        */

        switch($credit__card){
            case "visa":
                 echo "You have selected {$credit__card}" ;
                 break;
            
             case "mastercard":
                 echo "You have selected {$credit__card}" ;
                 break;

             case "paytm":
                 echo "You have selected {$credit__card}" ;
                 break;
             default:
               echo "please select your credit card";
            
        }
}

?>
