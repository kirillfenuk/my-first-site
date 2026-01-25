<?php
// Подключение к БД
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';
$stmt = $pdo->query("SELECT * FROM articles"); // Выбор таблицы articles из БД
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC); // Сохраняем результат подключения БД для того что бы преобразовать данные в массив и вывести их
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: black;
        }


        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }


        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }


        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }


        .card:hover {
            transform: translateY(-5px);
        }


        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }


        .card h2 {
            font-size: 20px;
            margin: 15px 0 10px;
        }


        .card p {
            color: #555;
        }
    </style>


    <h1>Наши статьи</h1>

    <div class="grid-container">
        <?php foreach ($articles as $article): ?>
            <div class="card">
                <img src="/img/<?= htmlspecialchars($article['image']) ?>" alt="">
                <h2><?= htmlspecialchars($article['title']) ?></h2>
                <p><?= nl2br(htmlspecialchars($article['description'])) ?></p>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>