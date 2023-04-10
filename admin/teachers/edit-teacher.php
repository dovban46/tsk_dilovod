<?php
session_start();
include "../../database/function.php";

$users = get_users();
foreach ($users as $user):
    $login = $user['login'];
    $password =$user['password'];
endforeach;

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
include_once "../../database/conf.php";
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редагування викладача</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h3>Редагування викладача</h3>
    </div>
    <div class="row">
        <div class="col">
            <?php
            $teacher_id = $_GET['teacher_id'];
            if (!is_numeric($teacher_id))
                header('location: ../404.php');

            $teacher = get_teacher_by_id($teacher_id);
            ?>
            <form action="update-teacher.php" method="post" enctype="multipart/form-data">
                <input type="text" name="id_teacher" value="<?=$teacher['id_teacher']?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Введіть прізвище викладача</label>
                    <input type="text" name="LastName" value="<?=$teacher['LastName']?>" class="form-control" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1">Введіть ім'я викладача</label>
                    <input type="text" name="FirstName" value="<?=$teacher['FirstName']?>" class="form-control" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1">Введіть по батькові викладача</label>
                    <input type="text" name="PoBatkovi" value="<?=$teacher['PoBatkovi']?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Введіть посаду викладача</label>
                    <input type="text" name="position" value="<?=$teacher['position']?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Введіть інформацію про викладача</label>
                    <textarea class="form-control" name="content_teacher" id="exampleFormControlTextarea1" rows="3"><?=$teacher['content_teacher']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Додати зображення викладача</label>
                    <input type="file" name="image" value="<?=$teacher['img_teacher']?>" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button class="btn btn-primary" type="submit">Обновити запис</button>
                <a href="index-teacher.php" class="btn btn-primary">Скасувати</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
