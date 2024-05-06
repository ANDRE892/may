<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/main.css">

    <script defer src="assets/js/main.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <title>Акции</title>
</head>
<body>
<?php
        include('assets/php/heder.php');
    ?>
    <main>
        <section class="akcii">
            <?php 
            require_once ('assets/bd/bd.php');

            $sql = "SELECT * FROM Tovar WHERE  Samtovar ='Gitara'";
            $res = mysqli_query($con,$sql);

            if(mysqli_num_rows($res) > 0) {
                while($row = mysqli_fetch_assoc($res)) {
                    $tovar_id = $row['id'];
            ?>
            <div class="akcii-blok"> 
                <div class="akcii-pod-blok">
                    <h1><?= $row['name'] ?></h1>
                    <p><?= $row['opis'] ?></p>
                    <div class="fleex"><a href="Tovar.php?id=<?= $tovar_id ?>" class="akcii-border2">добавить в корзину</a><p><?= $row['many'] ?></p><del><?= $row['slidkazacerk'] ?></del></div>
                </div>
                <div>
                    <img src="<?= $row['png1'] ?>" width="450px" height="500px" alt="">
                </div>
            </div>
            <?php
                }
            }
            ?>
        </section>
    </main>
    <footer>
        <div class="sled"><h1>СЛЕДИТЕ ЗА НАМИ</h1><img src="assets/svg/vk-svgrepo-com 4.svg" alt=""><img src="assets/svg/telegram-svgrepo-com 2.svg" alt=""></div>
        <div class="kon"><a href="">КОНТАКТЫ</a> <a href="index.html">ГЛАВНАЯ</a></div>
    </footer>
</body> 