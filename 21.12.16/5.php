<?php
function num($a){
    if($a % 2 == 0){
        $message ="Число четное";
    }else{
        $message = "Число не четное!";
    }
    return $message;
}
echo num(8);