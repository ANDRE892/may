<?php
require_once('bd.php');

$login = $_GET['login'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$repass = $_GET['repass'];

$echo = "";

if (empty($login) || empty($email) || empty($pass) || empty($repass)) {
    $echo = "Заполни все поля";
} elseif ($pass != $repass) {
    $echo = "Пароли не совпадают";
} else {
    $sql = "INSERT INTO `users` (login, email, pass) VALUES ('$login' , '$email' , '$pass')";
    if ($con->query($sql)) {
        $echo = "Успешная регистрация";
        header('Location: index.php');
    }
}
?>
<form class="Register-Main" action=" " metod="get">
    <section class="registraciya">
        <h1>Регистрация</h1>
        <input type="text" placeholder="Ваш логин" name="login">
        <input type="text" placeholder="Ваш e-mail" name="email">
        <input type="text" placeholder="Ваш пароль" name="pass">
        <input type="text" placeholder="Повторите пароль" name="repass">
        <?= $echo ?>
        <button type="submit">ПРОДОЛЖИТЬ</button>
    </section>
</form>