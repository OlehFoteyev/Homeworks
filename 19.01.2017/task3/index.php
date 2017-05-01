<?php
ob_start(); ?>
<p>
    3)Создать форму авторизации на сайте с тремя обязательных полями: login, password и email.
    Если данные введены верно, то записать в cookies специальный ключ,
    при наличии которого пользователю доступна кнопка "Выход".
    В момент выхода происходит удаление созданной ранее cookies.
</p>
<?php
if(isset($_GET['exit'])) {
    setcookie('access', false, 1);
    header('Location: http://' . $_SERVER['SERVER_NAME'] . DIRECTORY_SEPARATOR . $_SERVER['SCRIPT_NAME']);
}
if (($_POST['name']) && ($_POST['password']) && ($_POST['email'])){
    $users = [
        [
            'name' => 'user',
            'password' => 'user',
            'email' => 'user@mail.dom'
        ],
        [
            'name' => 'admin',
            'password' => 'admin',
            'email' => 'admin@mail.dom'
        ]
    ];
    foreach($users as $user) {
        if ($user['name'] === $_POST['name'] && $user['password'] === $_POST['password'] && $user['email'] === $_POST['email']) {
            setcookie('access', true, 0, DIRECTORY_SEPARATOR);
            setcookie('name', $_POST['name'], 0, DIRECTORY_SEPARATOR);
            $access = true;
        }
    }
}
if($_COOKIE['access'] || $access): ?>
    Привет ['<?= $_POST['name'] ? $_POST['name'] : $_COOKIE['name'] ?>'].
    <form method="get">
        <input type="submit" name='exit' value="Выход">
    </form>
<?php else: ?>
    <form method="post">
        <table>
            <tr>
                <td><label for="nameInput">Введите имя:</label></td>
                <td><input type="text" name="name" id="nameInput" required></td>
            </tr>
            <tr>
                <td><label for="passwordInput">Введите пароль:</label></td>
                <td><input type="password" name="password" id="passwordInput" required></td>
            </tr>
            <tr>
                <td><label for="emailInput">Введите электронную почту:</label></td>
                <td><input type="text" name="email" id="emailInput" required></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" value="Отправить"></td>
            </tr>
        </table>
    </form>
<?php endif;
ob_end_flush();
?>


