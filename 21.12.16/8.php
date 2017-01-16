<?php
function test($a)
{
    if($a % 4 == 0){
        echo "Год высокосный!!!.<br>";
    }else{
        echo "Год  не высокосный!!!.<br>";
    }
    return $a;
}
test(2011);