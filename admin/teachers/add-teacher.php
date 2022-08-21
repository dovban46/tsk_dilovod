<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Додання нового викладача</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h3>Додати нового викладача</h3>
    </div>
    <div class="row">
        <div class="col">
            <form action="check-teacher.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Введіть прізвище викладача</label>
                    <input type="text" name="LastName" class="form-control" id="exampleFormControlInput1">

                    <label for="exampleFormControlInput1">Введіть ім'я викладача</label>
                    <input type="text" name="FirstName" class="form-control" id="exampleFormControlInput1">

                    <label for="exampleFormControlInput1">Введіть по батькові викладача</label>
                    <input type="text" name="PoBatkovi" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Введіть посаду</label>
                    <textarea class="form-control" name="position" id="exampleFormControlInput1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Додати зображення викладача</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Введіть інформацію про викладача</label>
                    <textarea class="form-control" name="content_teacher" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Додати запис</button>
                <a href="index-teacher.php" class="btn btn-primary">Скасувати</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
