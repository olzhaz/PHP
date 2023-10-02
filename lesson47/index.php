<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация пользователя</title>
    </head>
    <body>
        <h1>Регистрация</h1>
        <form action="/register.php" method="post">
            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="confirm_password">Повторите Пароль:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <input type="submit" value="Зарегистрироваться">
        </form>
    </body>
</html>