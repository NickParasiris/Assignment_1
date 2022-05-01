<?php

$randomNumbers = array(1,4,76,9,98,15,26,41,87,91,57);

for ($x = 0; $x < count($randomNumbers); $x++) {
    if ($randomNumbers[$x] % 2 == 0) {
        unset($randomNumbers[$x]);
    }
}

?>