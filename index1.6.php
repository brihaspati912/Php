<?php
//arrays
//arrays="variables" which can hold more than one value at a time.
//foreach=($plurals as $singular)



$food_1 = "apple";
$fruits = array("apple", "orange", "pinapple","grapes");

//$fruits[0] = "sitaphal";
array_push( $fruits,"mango");
//array_pop( $fruits );
//array_shift( $fruits );
$reverced_fruits=array_reverse( $fruits);

foreach($reverced_fruits as $fruit){
    echo $fruit."<br/>";
    
}
echo count($fruits);


?>
