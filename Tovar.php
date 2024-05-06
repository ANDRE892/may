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

    <title>Главная</title>
</head>
<body>
    <?php
        include('assets/php/heder.php');
    ?>
    <main>
        <?php
        require_once('assets/bd/bd.php');
        $tovar_id = $_GET['id'];
        $sql = "SELECT * FROM Tovar WHERE id = $tovar_id";

        $res = mysqli_query($con,$sql);
        if($res) {
            $row = mysqli_fetch_assoc($res);
            $tovar_id = $row['id'];
        ?>
        <section class="tovar">
            <div class="cont-img">
                <div class="cont-img2">
                    <img src="<?= $row['png3'] ?>" alt="" width="150px" height="220px">
                    <img src="<?= $row['png2'] ?>" alt="" width="150px" height="220px">
                </div>
                <div>
                    <img src="<?= $row['png1'] ?>" alt="" width="450px" height="500px">
                </div>
            </div>
            <div>
                <h1><?= $row['name'] ?></h1>
                <div class="many">
                    <h1><?= $row['many'] ?></h1>
                    <del class="zac"><?= $row['slidkazacerk'] ?></del>
                    <p class="skidka"><?= $row['skidka'] ?></p>
                </div>
                <p><?= $row['name'] ?></p>
                <p><?= $row['opis'] ?></p>
                <a href="korzina.php?id=<?= $row['id'] ?>" class="button">Добавить в корзину</a>
            </div>
        </section>
        <?
                }
        ?>
    </main>

</body>
</html>