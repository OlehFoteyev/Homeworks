<?php
$arr = [];
for ($i = 0; $i <= 10; $i++){
    $arr[] = rand(0, 100);
}
print_r($arr);
echo '<br>';
print_r ($a =(max($arr)));
echo '<br>';
print_r ($b =(min($arr)));
$c =$b;
$b = $a;
$a = $c;
echo '<br>';
echo $a;
echo '<br>';
echo $b;