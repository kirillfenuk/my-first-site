<?php
session_start();

// Подключение к БД
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';


$userEmail = trim($_POST['user-email'] ?? '');
$password = $_POST['password'] ?? '';


if (empty($userEmail) || empty($password)) {
    die("Заполните все поля!");
}



try {
    $stmt = $pdo->prepare("SELECT id, username, password, balance FROM users WHERE email = :email");
    $stmt->execute([':email' => $userEmail]);
    $user = $stmt->fetch();

    if ($user) {
        // Проверяем пароль
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $userEmail;
            $_SESSION['balance'] = $user['balance'];


            header("Location: /php/dashboard.php");
            exit();
        } else {
            echo "Неверный пароль.";
        }
    } else {
        echo "Пользователь не найден.";
    }
} catch (PDOException $e) {
    echo "Ошибка базы данных: " . $e->getMessage();
}
