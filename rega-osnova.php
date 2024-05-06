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
    <title>Регистрация</title>
</head>
<body>
<?php
        include('assets/php/heder.php');
    ?>
    <main class="main-rega">
    <?php
        include('assets/bd/rega.php');
    ?>
    </main>
</body>
</html>
<style>
    body {
        overflow: hidden;
    }
</style>
