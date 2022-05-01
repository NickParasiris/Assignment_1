<?php
    
    $x = 153;
    $s = 0;
    $z = $x;

    while ($z != 0) {
        $a = $z % 10;
        $s = $s + $a**3;
        $z = $z/10;
    }
    
    if ($x == $s) {
        echo "This is an Armstrong Number.";  
    }  
 
    else  {  
        echo "This is not an Armstrong Number.";  
    }

?>