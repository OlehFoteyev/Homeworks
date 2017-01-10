<?php
$arr = ["Monday","Tuesday", "Wednesday","Thursday","Friday", "Saturday","Sunday",];

foreach($arr as $key => $day) {
    if ($day == "Saturday" || $day =="Sunday"){
        echo "<strong>". $day ."</strong><br>";
    }else{
        echo $day."<br>";
    }
}
