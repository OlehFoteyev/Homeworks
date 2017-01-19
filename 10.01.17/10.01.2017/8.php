
<?php

function test($a,$b){
    $c = sqrt(($a * $a) +($b * $b));
    return $c;
}
echo test(3,4);