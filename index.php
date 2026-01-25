<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta тег charset UTF 8 означает кодировку сайта -->
    <meta charset="UTF-8">
    <!-- Без этой строчки сайт не будет активным (под разные устройства и разрешения экранов телефонов, планшетов) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- подключение CSS к HTML (чтобы появились стили) -->
    <link rel="stylesheet" href="style.css">
    <!-- title заголовок страницы -->
    <title>Document</title>

    <!-- шрифт от google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap" rel="stylesheet">


</head>

<body>

<!-- подключение header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php' ?>

    <!-- это основной контент -->
    <main>
        <!-- первый блок -->
        <section class="hero">
            <img src="/img/gym-main.avif" alt="">
            <h1>Кружки спортивных секций2.</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias iste quibusdam illum inventore, ut nobis
                earum ipsam fugiat animi cumque possimus? Amet quae commodi hic voluptates laudantium totam mollitia
                nihil!</p>
            <p class="hero-p-bottom">это текст по середине</p>
        </section>

        <!-- 2 колонки с секкциями -->
        <section class="section-main">

            <!-- span используетс для перекраски части текста -->
            <!-- первый блок -->
            <section class="section-item karate">
                <h2>Первый блок</h2>
                <img src="img/karate.webp" alt="горы и озеро">
                <p> <span>Lorem ipsum dolor, sit  consectetur adipisicing elit.</span>, Fugiat maiores voluptatum neque laboriosam
                    <span class="karate-p-green">facilis molestiae corrupti animi culpa officia magnam.</span></p>
                    <div class="button">Подробнее</div>
            </section>

            <!-- второй блок -->
            <section class="section-item basket">
                <h2>Второй блок!</h2>
                <img src="img/basket.webp" alt="горы и озеро" width="500px">
                <p>Lorem ipsum dolor, sit <strong>amet</strong> consectetur adipisicing elit. Fugiat maiores voluptatum neque laboriosam
                    facilis molestiae corrupti animi culpa officia magnam.</p>
                <div class="button">Подробнее</div>
            </section>


        </section>

         <!-- 2 колонки с секкциями -->
         <section class="section-main">

            <!-- первый блок -->
            <section class="section-item tennis">
                <h2>Первый блок</h2>
                <img src="img/tennis.webp" alt="горы и озеро">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat maiores voluptatum neque laboriosam
                    facilis molestiae corrupti animi culpa officia magnam.</p>
                    <div class="button">Подробнее</div>
            </section>

            <!-- второй блок -->
            <section class="section-item football">
                <h2>Второй блок!</h2>
                <img src="img/football.webp" alt="горы и озеро" width="500px">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat maiores voluptatum neque laboriosam
                    facilis molestiae corrupti animi culpa officia magnam.</p>
                <div class="button">Подробнее</div>
            </section>


        </section>




        <aside>
            <p>Боковая понель используется в основном для меню или фильтра</p>
        </aside>




    </main>

    <footer>


        <div class="footer-left-block">
            <img src="/img/logo-white2.png" alt="">
            <h2>Спортивная секция</h2>
        </div>


        <div class="footer-right-block">
            <div class="footer-right-block-item">
                <h3>Главное</h3> 
                <ul>
                    <li>О нас</li>
                    <li>Правила</li>
                    <li>Выбор секции</li>
                    <li>Новости</li>
                    <li>Что-то ещё</li>
                </ul>
            </div>
            <div class="footer-right-block-item">
                <h3>Секции</h3>
                <ul>
                    <li>О нас</li>
                    <li>Правила</li>
                    <li>Выбор секции</li>
                    <li>Новости</li>
                    <li>Что-то ещё</li>
                </ul>
            </div>
            <div class="footer-right-block-item">
                <h3>Контакты</h3>
                <ul>
                    <li>телефон: 8800 900 00 00</li>
                    <li>Email: test@mail.com</li>
                    <li>Время работы:
                        Будни с 8:00 до 15:00
                    </li>
                </ul>
            </div>
        </div>






    </footer>



</body>