<?php
$month = 0;
$arr = array (
    "Январь",
    "Февраль",
    "Март",
    "Апрель",
    "Май",
    "Июнь",
    "Июль",
    "Август",
    "Сентябрь",
    "Октябрь",
    "Ноябрь",
    "Декабрь",
);
foreach ($arr as $k => $v){
    if($k == $month ){
        echo "<strong>$v</strong><br>";
    }else{
        echo $v."<br>";
    }
}