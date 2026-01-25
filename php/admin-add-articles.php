<?php 
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'Кирилл') {
    die("Доступ заперщён.");
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $image = trim($_POST['image']);

    if (empty($title) || empty($description) || empty($image)) {
        echo "Заполните все поля!";
    } else {
        $stmt = $pdo->prepare("INSERT INTO articles (title, description, image) VALUES (:title, :description, :image)");
        $stmt->execute([':title' => $title, ':description' => $description, ':image' => $image]);
        header("Location: /php/admin-articles.php");
        exit;
    }
}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Добавить статью</title>
</head>
<body>
  <h1>Добавить новую статью</h1>
  <form method="POST">
    <label>Заголовок:<br><input type="text" name="title" required></label><br><br>
    <label>Описание:<br><textarea name="description" rows="6" cols="50" required></textarea></label><br><br>
    <label>Название картинки (example.jpg):<br><input type="text" name="image" required></label><br><br>
    <button type="submit">Добавить статью</button>
  </form>

  <br>
  <a href="/php/admin-articles.php">Вернуться к списку</a>
</body>
</html>