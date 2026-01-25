<?php if (!empty($items)): ?>
    <?php foreach ($items as $item): ?>
        
        <!-- Карточка -->
        <div class="blog-row__item">
            
            <!-- Верхняя часть -->
            <div class="blog-row__item__top">
                <div class="blog-row__item__logo">
                    <img src="<?= $item['img_logo'] ?>" alt="<?= $item['img_logo_alt'] ?>">
                </div>
                    
                <h2><?= $item['title'] ?></h2>
                <p class="blog-row__item__date"><?= $item['date'] ?></p>
            </div>

            <!-- Основная часть -->
            <div class="blog-row__item__main">
                <img src="<?= $item['img_main'] ?>" alt="<?= $item['img_main_alt'] ?>">
                <p class="blog-row__item__description"><?= $item['description'] ?></p>
                <a href="page2.html" target="_blank">открыть статью</a>
            </div>

        </div>

    <?php endforeach; ?>
<?php else: ?>
    <p>Нет данных для отображения.</p>
<?php endif; ?>





<!-- Это добавлять в HTML только перед ?php удалить начало комментария  -->
<!-- ?php     
    $items = [
        // Карточка
        [
            'img_logo' => '',
            'img_logo_alt' => '',
            'title' => '',
            'date' => '',

            'img_main' => '',
            'img_main_alt' => '',
            'description' => ''
        ]
    ];

    include $_SERVER['DOCUMENT_ROOT'] . '/modules/blog-container-item.php';
?>
-->
