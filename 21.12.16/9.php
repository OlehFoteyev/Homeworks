<?php
function sum(...$numbers) {
    foreach ($numbers as $n) {
        if($n %2 == 0)
            echo $n .'<br>';
    }
}
echo '<pre>';
print_r(sum(1, 2, 3, 4,5,6,7,8));
echo '</pre>';