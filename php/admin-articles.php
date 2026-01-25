<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'Кирилл') {
    die("Доступ заперщён.");
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

$stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление статьями</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 40px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			border: 1px solid #ccc;
			padding: 10px;
			text-align: left;
		}

		th {
			background: #eee;
		}

		a.button {
			padding: 5px 10px;
			background: #007bff;
			color: white;
			text-decoration: none;
			border-radius: 5px;
		}

		a.delete {
			background: #dc3545;
		}
	</style>

</head>
<body>
    <h1>Управление статьями</h1>

    <a href="/php/admin-add-articles.php" class="button">Добавить новую статью</a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Изображение</th>
            <th>Действия</th>
        </tr>
        <?php foreach ($articles as $article): ?>

            <tr>
                <td><?= $article['id'] ?></td>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= mb_strimwidth(htmlspecialchars($article['description']), 0, 60, '...') ?></td>
				<td><?= htmlspecialchars($article['image']) ?></td>
				<td>
					<a href="/php/admin-edit-article.php?id=<?= $article['id'] ?>" class="button">Редактировать</a>
					<a href="/php/admin-delete-article.php?id=<?= $article['id'] ?>" class="button delete" onclick="return confirm('Удалить статью?');">Удалить</a>
				</td>
			</tr>
		<?php endforeach; ?>
    </table>

	<br>
	<a href="/php/dashboard.php">Вернуться в личный кабинет</a>
</body>
</html>