<p>
    7) Напишите функцию, которая реализует алгоритм 'решето Эратосфена' для поиска простых чисел в заданном промежутке.
        Алгоритм найдите самостоятельно в поисковых системах.
</p>
<?php
function test($a,$b)
{
    for ($i = range($a,$b); ($arr[] = array_shift($i)) && count($i) > 0;)
        foreach ($i as $k => $v)
            if ($v % end($arr) == 0) unset($i[$k]);
    return $arr;
};
echo "<pre>";
print_r(test(2,100));
echo "</pre>";