<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Вход в личный кабинет</h2>
    <form action="/config/login.php" method="POST">
        <label>Ввведите вашу почту:</label> <br>
        <input type="email" name="user-email" ><br>

        <label>Введите ваш пароль</label><br>
        <input type="password" name="password" required><br>

        <button type="submit">Войти</button>
    </form>

</body>
</html>