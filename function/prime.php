<?php

function Isprime($n){
    for($x=2;$x<=$n; $x++){
        if($n % $x ==0){
            return 0;
        }

        else{
            return 1;
        }
    }
    
}
$a =Isprime(5);
if ($a==0){
    echo ("this is not a prime number");
}
else {
    echo( "This is a prime number");
}


?>