<?php
require './model/functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    update_user($_SESSION['username'], $_POST['email'], $_POST['email']);
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновление данных</title>
</head>

<body>

    <header>
        <a href="/">Главная</a>
        <a href="/login.php">Авторизация</a>
        <a href="/register.php">Регистрация</a>
        <a href="/update.php">Обновить данные</a>
        <?php if ($_SESSION['role'] === 'admin') { ?>
            <a href="users.php">Список пользователей</a>
        <?php } ?>
    </header>

    <h1>Обновление данных</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Новое имя пользователя" required autocomplete="off">
        <input type="email" name="email" placeholder="Новый email" required autocomplete="off">
        <input type="password" name="password" placeholder="Новый пароль (если нужно)" autocomplete="off">
        <button type="submit">Обновить</button>
    </form>

</body>

</html>