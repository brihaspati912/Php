<?php
//assertive array
//foreach($array as $key => $value)

$capitals= array("USA" =>"Washington Dc" ,"India"=>"New Delhi" ,"Japan"=>"kyoto");

//$capitals["China"]= "Bejing";
//array_pop($capitals);
//$capitals=array_reverse($capitals);
//$keys=array_keys($capitals);
//$values=array_values($capitals);
//$capitals=array_flip($capitals);


foreach($capitals as $country => $capital){
    echo "The capital {$country} of is {$capital}. <br/>";
}
echo count($capitals);
/*
foreach($keys as $key){
    echo"".$key."<br>";
}*/

/*
foreach($values as $value){
    echo"".$value."<br>";
}
    */
?>