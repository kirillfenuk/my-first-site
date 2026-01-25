<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости сайта</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- подключение header -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php' ?>

    <main>

        <div class="blog-container">

            <!-- строчка -->
            <div class="blog-row">
                <!-- Подключаем данные -->
                <?php     
                    $items = [
                        // Карточка
                        [
                            'img_logo' => 'img/logo.png',
                            'img_logo_alt' => 'логотип',
                            'title' => 'Статья 1',
                            'date' => '12.06.25',

                            'img_main' => 'img/football.webp',
                            'img_main_alt' => 'фото  мяча на фоне ворот',
                            'description' => 'На закате, когда солнце окрашивает небо в теплые оттенки оранжевого и розового, перед футбольными воротами лежит мяч.'
                        ],

                        // Карточка
                        [
                            'img_logo' => 'img/logo.png',
                            'img_logo_alt' => 'логотип',
                            'title' => 'Статья 2',
                            'date' => '17.06.25',

                            'img_main' => 'img/basket.webp',
                            'img_main_alt' => 'игра в баскетболл',
                            'description' => 'На фотографии запечатлён напряжённый момент игры в баскетбол.'
                        ],

                        // Карточка
                        [
                            'img_logo' => 'img/logo.png',
                            'img_logo_alt' => 'логотип',
                            'title' => 'Статья 3',
                            'date' => '19.06.25',

                            'img_main' => 'img/tennis.webp',
                            'img_main_alt' => 'игра в  теннис',
                            'description' => 'На снимке запечатлён ключевой момент игры — теннисист в мощном развороте готовится нанести удар.'
                        ]
                    ];
                    include $_SERVER['DOCUMENT_ROOT'] . '/modules/blog-container-item.php';
                ?>
            </div>

        </div>

    </main>
    

</body>

</html>