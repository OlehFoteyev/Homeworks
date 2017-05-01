<?php
ob_start();
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta charset='utf8'>
    </head>
    <body>
    <p>
        6) Доработать 3-задачу таким образом, чтобы при отсутствии авторизационной куки,
        пользователя редиректило на файл login.php,
        который рендерит форму и пытается авторизовать пользователя(функционал по авторизации также перенести в этот файл)
    </p>
    <?php
    if(isset($_GET['exit'])) {
        setcookie('access', false, 1);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR . '6');
    }
    if($_COOKIE['access']): ?>
        Привет ['<?= $_COOKIE['name'] ?>'].
        <form method="get">
            <input type="submit" name='exit' value="Выход">
        </form>
        <?php
    else:
        header('Location: http://' . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR . '6' . DIRECTORY_SEPARATOR .'login.php');
    endif;
    ?>
    </body>
    </html>
<?php
ob_end_flush();
?>