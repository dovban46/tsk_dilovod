<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Авторизація</title>
    <link rel="stylesheet" href="../css/login-form.css">
</head>
<body>
<div class="container">
    <h2 class="login-title">Авторизація</h2>
    <form class="login-form" action="check-login.php" method="post">
        <div>
            <label for="email">Логін </label>
            <input id="exampleInputEmail1" type="text" placeholder="логін" name="login" required/>
        </div>
        <div>
            <label for="password">Пароль </label>
            <input id="exampleInputPassword1" type="password" placeholder="пароль" name="password" required/>
        </div>
        <button class="btn btn--form" type="submit" value="Log in">Увійти</button>
        <a class="btn btn--form" href="../index.php" role="button">Скасувати</a>
    </form>
</div>
</body>
</html>