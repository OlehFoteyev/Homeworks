<?php
$arr = array(
    'green' => "зеленый",
    'red' => "красный",
    'blue' => "голубой",
);
foreach($arr as $name => $val){
    $en[] = $name;
    $rus[] = $val;
}
echo '<pre>';
print_r($en);
print_r($rus);
echo '</pre>';