
<?php
ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p>
    5) Запишите в сессию время захода пользователя на сайт.
    При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
</p>
<?php
echo 'Здравствуйте.<br>';
if(isset($_COOKIE['time'])) {
    $timeDiff = time() - $_COOKIE['time'];
    echo 'Последний раз вы заходили ' . $timeDiff . ' секунд назад.';
}
setcookie('time', time(), 0, DIRECTORY_SEPARATOR);
?>
</body>
</html>
<?php
ob_end_flush();
?>