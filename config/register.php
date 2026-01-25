<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php'; // Подключение к БД 
$stmt = $pdo->query("SELECT * FROM users"); // Выбор таблицы users из БД






// Получаем данные из формы и удаляем пробелы (trim)
// ? Если поля userName нет — переменная станет пустой строкой (скрипт продолжит работу) else сокращённое
$userName = trim($_POST['user-name'] ?? ''); 
$userEmail = trim($_POST['user-email'] ?? '');
$userPassword = trim($_POST['user-password'] ?? '');
$userNumber = trim($_POST['user-number'] ?? '');


// Проверяем что все поля заполненны || - это или
if (empty($userName) || empty($userEmail) || empty($userPassword) || empty($userNumber)) { 
    die("Заполните все поля!");
}


// Проверка корректности userEmail с помощью встроенной фильтрации
if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    die("Вы ввели некорректный email адрес!");
}

// Проверка пароля
if (strlen($userPassword) < 6) {
    die("Пароль должен содержать минимум 6 символов!");
}


// Хеширование пароля
$hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);


// Подготавливаем SQL-запрос для добавления пользователя и начисление 1000 бонусов
// $sql — это как "шаблон письма" для базы данных
// Добавь нового пользователя с этими данными и дай ему 1000 бонусов
$sql = "INSERT INTO users (username, email, password, number, balance) 
        VALUES (:username, :email, :password, :number, 1000)";
// stmt и pdo это подготовка конверта и написание на конверте адрес
$stmt = $pdo->prepare($sql);



// Данные для подготовленного sql запроса
// try пробуем отпровлять запрос
try {
    // $stmt->execute берем данные вкладываем в конверт и отпровляем 
    $stmt->execute([
        ':username' => $userName,
        ':email' => $userEmail,
        ':password' => $hashedPassword,
        ':number' => $userNumber
    ]);

    // если всё успешно информируемм пользователя и предлолгаем ему перийти на странице входа
    echo "Регистрация успешна! Вам начислено 1000 бонусов.";
    echo '<br><a href="/php/login-page.php">Войти в личный кабинет</a>';


// Если мы отправили запрос и будет ошибка (если почтальон вернётся с ошибкой то обработаем её)
} catch (PDOException $e) {
    // Код 23000 обычно означает нарушение уникального ограничения (например, duplicate userEmail)
    if ($e->getCode() == 23000) {
        echo "Пользователь с таким email уже зарегистрирован.";
    } else { 
        echo "Ошибка регестрации: " . $e->getMessage();
    }
}