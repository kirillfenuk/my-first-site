<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login-page.php");  
    exit();
}
?>

<style>

    .dashboard-buttons button {
        padding: 15px 30px;
        margin-right: 30px;
        border-radius: 20px;
    }

    /* аватарка фио баланс */
    .dashboard-main {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .dashboard-avatar{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px;
        margin-top: 40px;
        width: max-content;
    }

    .dashboard-avatar__photoadd{
        background-color: green;
        padding: 15px 30px;
        border-radius: 20px;
        width: max-content;
    }

    .dashboard-avatar__photodelete{
        background-color: red;
        margin-top: 20px;
        padding: 15px 30px;
        border-radius: 20px;
        width: max-content;
    }

    .dashboard-avatar__photo{
        margin: 40px 0 20px 0;
    }

    .dashboard-avatar__alt{
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 2px solid black;
    }

    /* фио */
    .dashboard-full{
        padding: 10px;
        width: auto;
        border: 2px solid black;
        border-radius: 20px;
        
    }

    .dashboard-user-balance{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0 10px 0 10px;
        margin: 0 60px;
        width: 250px;
        height: 350px;
        border: 2px solid black;
        border-radius: 10px;
    }

    .dashboard-user-pay{
        height: 30px;
    }



</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
</head>
<h2>Добро пожаловать <?php echo htmlspecialchars($_SESSION['username']) ?>!</h2>
<body>
    <h1>Личный кабинет</h1>
    <div class="dashboard-buttons">
        <button class="dashboard-buttons__info">Общая информация:</button>
        <button class="dashboard-buttons__chande_pass">Смена пороля</button>
        <button class="dashboard-buttons__favorits">Избранное</button>
        <button class="dashboard-buttons__exit">Выход</button>
    </div>
    <div class="dashboard-main">
        <div class="dashboard-avatar">
            <img src="" alt="Аватарка" class="dashboard-avatar__alt">
            <button class="dashboard-avatar__photoadd">Добавить фото</button>
            <button class="dashboard-avatar__photodelete">Удалить</button>
        </div>

        <div class="dashboard-user-info">
            <p>ФИО</p>
            <div class="dashboard-full name">Kirill</div>
            <p>Email</p>
            <div class="dashboard-full email">test@mail.com</div>
            <p>Номер телефона</p>
            <div class="dashboard-full number">7 999 999 99-99</div>
        </div>

        <div class="dashboard-user-balance">
            <p>Мой баланс:</p>
            <p>Ваш баланс: <?php echo htmlspecialchars($_SESSION['balance']) ?> бонусов</p>
            <button class="dashboard-user-pay">Пополнить</button>
        </div>
    </div>
    

    



    <a href="/config/logout.php">Выход</a>

    <?php if ($_SESSION['username'] === 'Кирилл'): ?>
        <hr>
        <h3>Раздел администратора</h3>
        <a href="/php/admin-articles.php">Управление статьями</a>
    <?php endif; ?>
    

</body>
</html> 