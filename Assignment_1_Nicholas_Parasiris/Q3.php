<?php

for ($x = 1; $x <= 100; $x++) {
    
    if ($x % 3 == 0 && $x % 7 !== 0) {
        echo " Fizz";
    }
    
    if ($x % 7 == 0 && $x % 3 !== 0) {
        echo " Buzz";
    }
    
    if ($x % 3 == 0 && $x % 7 == 0) {
        echo " FizzBuzz";
    }
    
    else {
        echo " ";
        echo $x;
    }
}




?>

