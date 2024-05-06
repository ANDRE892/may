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
    
        <title>Каталог</title>
    </head>
<body>
<?php
        include('assets/php/heder.php');
    ?>
    <main>
        <section class="vse-katalog">
            <section class="menu-katalog">
                <h1 class="text-katalog">КАТАЛОГ</h1>
                <div class="blok-menu"><hr><img src="assets/svg/menu/wlfvk08tf13hq2lnnft0t7ww1akexbs6.svg" alt=""><p>Гитары</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/3tse6lc7tobv4hbyuwj0mgiocrfvh4nm.svg" alt=""><p>Звук</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/lxnv7w34n9owyc2c90lec3d7gt9sq1au.svg" alt=""><p>Свет и шоу</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/2ut4h1r1gw64na5glvk6wdha1olmfge0.svg" alt=""><p>Клавишные</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/30cozf8eq4npz7uomgnqxf3vbbrb8dl5.svg" alt=""><p>Микрофоны</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/qzpaabeqcu3hpdc3pahuwt4keqn32juv.svg" alt=""><p>Студия</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/vto20gu0edw80saht0h7umg2itaf43h2.svg" alt=""><p>Ударные</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/21ep37zx2qtub6ioci7woeoxgepi5vjp.svg" alt=""><p>Перекусия</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/azyd1szlon0o33roh12jauf0xy6ewycl.svg" alt=""><p>Духовные</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/5u870a0bhyfqlxhypkxxa3e77n31yf0v.svg" alt=""><p>Смычковые</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/8pd1veafg82dcm449onknfedkp81slxp.svg" alt=""><p>Народно-этнические</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/i1o9qa12woe9alvnjvm9j6hezzkorpcu.svg" alt=""><p>Коммутация</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/ldguxbsne8yt8dqkekx9f8o0uw49rvbp.svg" alt=""><p>Стойки</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/hq5u0tznyorf36cycla1ry2q56201qte.svg" alt=""><p>Чехлы</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/3hcnrxupmmslq13xe1lopwg5t153lhu8.svg" alt=""><p>Аксессуары</p></div>
                <hr>
                <div class="blok-menu"><hr><img src="assets/svg/menu/vto20gu0edw80saht0h7umg2itaf43h2.svg" alt=""><p>Ударные</p></div>
            </section>
            <section class="rait-katalog">
                <section>
                    <div class="reklama">

                    </div>
                </section>
                <section> 
                    <h1 class="h1">ГИТАРЫ</h1>
                    <div class="blok-katalog">
                        <?php 
                        require_once ('assets/bd/bd.php');

                        $sql = "SELECT * FROM Tovar WHERE  Samtovar ='Gitara'";
                        $res = mysqli_query($con,$sql);

                        if(mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                $tovar_id = $row['id'];
                        ?>
                            <div class="pod-blok-katalog"><a href="Tovar.php?id=<?= $tovar_id ?>"><img src="<?= $row['png1'] ?>" alt=""><p><?= $row['name'] ?></p></a></div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </section>
                <section> 
                    <h1 class="h1">Звук</h1>
                    <div class="blok-katalog">
                        <?php 
                        require_once ('assets/bd/bd.php');

                        $sql = "SELECT * FROM Tovar WHERE  Samtovar ='Zvyk'";
                        $res = mysqli_query($con,$sql);

                        if(mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                $tovar_id = $row['id'];
                        ?>
                            <div class="pod-blok-katalog"><a href="Tovar.php?id=<?= $tovar_id ?>"><img src="<?= $row['png1'] ?>" alt=""><p><?= $row['name'] ?></p></a></div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </section>
            </section>
        </section>
    </main>
    <footer>
        <div class="sled"><h1>СЛЕДИТЕ ЗА НАМИ</h1><img src="assets/svg/vk-svgrepo-com 4.svg" alt=""><img src="assets/svg/telegram-svgrepo-com 2.svg" alt=""></div>
        <div class="kon"><a href="">КОНТАКТЫ</a> <a href="index.html">ГЛАВНАЯ</a></div>
    </footer>
</body>
</html>