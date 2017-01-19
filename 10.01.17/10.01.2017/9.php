<?php
function col(){
    $a = func_num_args();
    return $a;
}
echo col(1,2,3,4,5);