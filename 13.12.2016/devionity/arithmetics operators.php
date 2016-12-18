<?php

$count_seconds = 0;
define("DAY",365);
define("HOUR",24);
define("SECONDS",60);

$count_seconds = DAY * HOUR * SECONDS;
echo $count_seconds;
$balance = $count_seconds%2;
echo '<br>';
echo $balance;