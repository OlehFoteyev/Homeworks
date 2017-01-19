<?php
function test($s,$t)	//$s-расстояние в км, $t-время в часах
{
$km = $s / $t;
$m = $s * 1000 / ($t * 60 * 60);

return "Скорость {$km} км/ч  <br> и <br>{$m} м/с ";
}
echo test(100,1);