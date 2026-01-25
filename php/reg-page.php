<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регестрация</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <section class="form-send">
        <form action="/config/register.php" method="POST"> <!-- form это форма для отправки данных -->
            <!-- id - индентификатор -->
            <label for="username">"Имя:"</label> <br>
            <input type="text" name="user-name" placeholder="Введите ваше имя" required> <br>
            
            <label for="email">Email</label> <br>
            <input type="email" name="user-email" placeholder="Введите ваш email"> <br>

            <!-- reqoired - делает обязательным поле для заполнения -->
            <label for="pass">"Пароль:"</label> <br>
            <input type="password" name="user-password" placeholder="Введите пароль" minlength="6" required> <br>
            
            <label for="tel">"Телефон:"</label> <br>
            <input type="number" name="user-number" placeholder="Введите номер телефона" required> <br>

            <!-- rows - кол во строк которуюж занимает форма-->
       <!--      <label for="text-block">Коментарий</label> <br>
            <textarea name="" id="text-block" rows="5" cols="39" maxlength="150"></textarea> -->

<!--            <div class="uslovia">
                <label for="">Согласен с условиями</label>
                <input type="checkbox" id="" required>
           </div> -->
            <!-- <input type="file"> --> <br>
            <button type="submit">Отправить</button>

        </form>
    </section>
</body>
</html>  