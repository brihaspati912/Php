



<?php 

function is_even($value) {

    $result = $value % 2;

    if ($result==0){
        echo "even <br>";
    }else{
        echo "odd <br>";
    }
}
 is_even(11);


 function hypotenous(int $a,int $b){
    $c= sqrt($a**2 + $b**2);
    return $c;
 }
 
echo hypotenous(4,5)

?>