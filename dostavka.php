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

        <script defer src="assets/js/main.js"></script>

        <title>Доставка</title>
    </head>
<body>
<?php
        include('assets/php/heder.php');
    ?>
    <main>
        <section class="dostavka-vse">
            <div>
                <h1>Доставка</h1>
                <div class="dostavka-razdel">
                    <h2>По Москве в пределах МКАД</h2>
                    <p>заказ ДО 5000Р - 400Р</p>
                    <p>заказ ОД 5000Р - 0.00001Р</p>
                    <hr>
                    <h2>От Мкада до грряаниц Московской обл.</h2>
                    <p>до 10км - 400Р</p>
                    <p>10-25 - 1000Р</p>
                    <p>25-40 - 1500Р</p>
                </div>
            </div>
            <div>
                <h1>Оплата</h1>
                <div class="oplata-razdel">
                    <h2>Оплата при получении</h2>
                    <p>Оплата наличными курьеру или в пункте выдачи товара.</p>
                    <p>Оплата банковской картой курьеру или в пункте выдачи товара. Не всегда транспортные компании принимают оплату по банковской карте. Возможность оплаты банковской картой нужно уточнять дополнительно у менеджера службы доставки.</p>
                    <hr>
                    <h2>Безналичный расчет</h2>
                    <p>Оплата по счету возможна в любом банке Для юридических лиц возможна работа по договору Для гос. и муниципальных компаний возможна рассрочка платежа и оплата по факту поставки.</p>
                    <hr>
                    <h2>Кредит - на выгодных условиях</h2>
                    <p>Рассрочка при оплате банковскими картам: Для выбора оплаты товара с помощью банковской карты на соответствующей странице необходимо нажать кнопку «Оплата заказа банковской картой».</p>
                </div>
            </div>
            <div>
                <h1>Наши реквизиты</h1>
                <div class="dostavka-razdel">
                    <h2>Музыкальный магазин Кукиш</h2>
                    <p>Интернет-магазин, где можно купить музыкальные инструменты, световое и звуковое оборудование для сцены и студии, кафе и ресторанов.</p>
                    <p>На сайте представлены гитары, пианино, синтезаторы, прожекторы, микшеры, фермы - любое оборудование в наличии и под заказ.</p>
                    <p>Компания была основана в 2007 году, и сейчас почти в каждом городе России находятся наши партнеры, магазины или точки выдачи.</p>
                    <hr>
                    <h2>Сегодня Кукиш это:</h2>
                    <p>богатый ассортимент музыкальных инструментов;</p>
                    <p>премиальные модели ведущих звуковых брендов;</p>
                    <p>известные марки световых приборов и их надежные аналоги.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="sled"><h1>СЛЕДИТЕ ЗА НАМИ</h1><img src="assets/svg/vk-svgrepo-com 4.svg" alt=""><img src="assets/svg/telegram-svgrepo-com 2.svg" alt=""></div>
        <div class="kon"><a href="">КОНТАКТЫ</a> <a href="index.html">ГЛАВНАЯ</a></div>
    </footer>
    <form id="avtorizForm" action="assets/bd/avtoriz.php" method="get" style="display:none;">
        <section class="avtoriz">
            <?php if ($_COOKIE['no-user'] != ''): ?>
            <a class = "error-no-user">Такого пользователя нет</a>
            <?php endif;?>
            <h1>Войти в аккаунт</h1>
            <div>
                <p>Телефон или email</p>
                <input class="avtoriz-int" type="text" placeholder="Ваш телефон или email" name="email">
            </div>
            <div>
                <p>Пароль</p>
                <input class="avtoriz-int" type="text" placeholder="Ваш пароль" name="pass">
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
</body>
</html>