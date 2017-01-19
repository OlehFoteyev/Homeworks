<?php

function test($a){
    if($a >= 50 && $a <= 100 ) {
        return  "Число а содержится в интервале.";
    }else return  "Число а не содержится в интервале.";
}
echo test(110);