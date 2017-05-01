<?php
ob_start();
if(($_POST['name']) && ($_POST['password']) && ($_POST['email'])) {
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
?><!DOCTYPE HTML>
<html>
<head>
    <meta charset='utf8'>
</head>
<body>
<?php if($access): ?>
    <meta http-equiv="Refresh" content="5;
	url=http://<?=  $_SERVER['SERVER_NAME'] . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR . '6' . DIRECTORY_SEPARATOR .'index.php' ?>">
    Добро пожаловать.<br>
    Сейчас вас перекинет на главную.
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
    <?php
endif;
ob_end_flush();
?>
<body>
</html>
