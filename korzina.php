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
        <section class="vskor"> 
            <div class="korv">
                <h1 class="vashe">Ваша корзина</h1>
                <div class="obvodka">
                    <?
                    require_once('assets/bd/bd.php');

                    $tovar_id = $_GET['id'];
                    $sql = "SELECT * FROM Tovar WHERE id = $tovar_id";
                    $res = mysqli_query($con,$sql);
                    if($res) {
                        $row = mysqli_fetch_assoc($res);
                        $tovar_id = $row['id'];
                    ?>
                    <div class="samtovar">
                        <div>
                            <img src="<?= $row['png1'] ?>" alt="" width="125px" height="180px">
                        </div>
                        <div>
                            <h1><?= $row['name'] ?></h1>
                            <p><?= $row['many'] ?></p>
                            <del><?= $row['many'] ?></del>
                        </div>
                        <div>

                        </div>
                    </div>
                    <?php
                    } else {
                        echo "Вы не выбрали товар";
                    }
                    ?>
                </div>
            </div>
            <div class="itog">
                <h1>Итоговый заказ</h1>
                <div class="sad">
                    <p>Сумма заказа</p>
                    <p><?= $row['many'] ?></p>
                </div>
                <div class="sad">
                    <p>Доставка</p>
                    <p>1 500₽</p>
                </div>
                <hr>
                <?php
                    $a = $row['many'];
                    $aa = str_replace(' ', '', $a);
                    // str_replace - Заменяет все вхождения строки поиска на строку замены
                    $b = 1500;
                    $c = $aa + $b;
                ?>
                <div class="sad">
                    <h1>Итог</h1>
                    <p><?= $c ?></p>
                </div>
                <button class="zakaz">Заказать</button>
            </div>
        </section>
    </main>

</body>
</html>