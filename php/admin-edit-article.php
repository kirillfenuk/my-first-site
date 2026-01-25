<?php 
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'Кирилл') {
    die("Доступ заперщён.");
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

$id = $_GET['id'] ?? 0;

// Загружаем статью по ID
$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
$stmt->execute([':id' => $id]);
$article = $stmt->fetch();

if (!$article) {
    die("Статья не найдена");

}

// Если форма отпревлена
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $image = trim($_POST['image']);

    if (empty($title) || empty($description) || empty($image)) {
        echo "Все поля обязательны.";
    } else {
        $update = $pdo->prepare("UPDATE articles SET title = :title, description = :description, image = :image WHERE id = :id");
        $update->execute([
            ':title' => $title,
            ':description' => $description,
            ':image' => $image,
            ':id' => $id
        ]);
        header("Location: /php/admin-articles.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Редактировать статью</title>
</head>
<body>
  <h1>Редактировать статью</h1>
  <form method="POST">
    <label>Заголовок:<br><input type="text" name="title" value="<?= htmlspecialchars($article['title']) ?>" required></label><br><br>
    <label>Описание:<br><textarea name="description" rows="6" cols="50" value="<?= htmlspecialchars($article['description']) ?>" required></textarea></label><br><br>
    <label>Картинка:<br><input type="text" name="image" value="<?= htmlspecialchars($article['image']) ?>" required></label><br><br>
    <button type="submit">Сохранить изменения</button>
  </form>

  <br>
  <a href="/php/admin-articles.php">Вернуться к списку</a>
</body>
</html>