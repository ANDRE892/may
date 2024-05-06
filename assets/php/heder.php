<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Header" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Document</title>
</head>
<body>
    
<header>
        <div>
            <a href="index.php"><img src="assets/svg/logo.svg" alt=""></a>
        </div>
        <div class="katalog">
            <ul>
                <li><a href="Katalog.php">Каталог</a></li>
                <hr>
                <li><a href="akcii.php">Акции</a></li>
                <hr>
                <li><a href="magazin.php">Магазины</a></li>
                <hr>
                <li><a href="">Помощь</a></li>
                <hr>
                <li><a href="dostavka.php">Доставка и оплата</a></li>
                <hr>
                <li><a href="rega-osnova.php">Регистрация</a></li>
                <hr>
                <li><a href="onas.php">О нас</a></li>
            </ul>
        </div>
        <div class="menu">
            <img src="assets/svg/Icon.svg" onclick="toggleForm()"  alt="">
            <a href="Korzina.php"><img src="assets/svg/Vector.svg" alt=""></a>
        </div>
    </header>
</body>
<?php
require_once 'assets/bd/bd.php';
// загрузка то не с хедера 
$emailorlogin = $_GET['emailorlogin'];
$pass = $_GET['pass'];

$echo = '';

if (empty($emailorlogin) || empty($pass)) {
    $echo = 'Заполните все поля';
}   else {
    $sql = "SELECT * FROM `users` WHERE (email = '$emailorlogin' OR login = '$emailorlogin') AND  pass = $pass";
    $res = $con->query($sql);
    if ($res && $res->num_rows > 0){
        // setcookie('Vxod', $row['login'], time() + 3600 * 24, "/");
        header("Location: index.php");
    }
}

?>
<form id="avtorizForm" action="" method="get" style="display:none;">
        <section class="avtoriz">
            <h1>Войти в аккаунт</h1>
            <div>
                <p>Телефон или email</p>
                <input class="avtoriz-int" type="text" placeholder="Ваш логин или email" name="emailorlogin">
            </div>
            <div class="div-vxod">
                <p>Пароль</p>
                <input class="avtoriz-int" type="text" placeholder="Ваш пароль" name="pass">
                <p class="echo"><?= $echo ?></p>
            </div>
            <button>Вход</button>
        </section>
    </form>

    <script>
        function toggleForm() {
            var form = document.getElementById('avtorizForm');
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
    </script>
</html>