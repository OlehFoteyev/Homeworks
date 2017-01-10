<?php
$arr = array(
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400,
);
foreach($arr as $name => $val){

    echo '<pre>';
    echo $name . "- зарплата " .$val;
}
echo '</pre>';