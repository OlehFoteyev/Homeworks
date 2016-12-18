<?php

for ($i = 200; $i == 400; $i++){
    $num = $i;
    if($i % $num == 0){
        echo "первое простое число{$num}";
        break;
    }
}