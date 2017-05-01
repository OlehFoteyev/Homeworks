<?php
session_start();
$answer1 = ($_POST['answer1']);
$_SESSION['answer1'] = $answer1;
?>
<p>Привет <?=$answer1 ?>!</p>
