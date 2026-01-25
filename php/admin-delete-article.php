<?php 
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'Кирилл') {
    die("Доступ заперщён.");
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

$id = $_GET['id'] ?? 0;

// Загружаем статью по ID
$stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
$stmt->execute([':id' => $id]);




header("Location: /php/admin-articles.php");
exit;

?>
