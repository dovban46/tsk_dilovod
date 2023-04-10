<?php
session_start();
include "../../database/function.php";

$users = get_users();
foreach ($users as $user):
    $login = $user['login'];
    $password =$user['password'];
endforeach;

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../../login/index.php');
}
include "../../database/conf.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адмін-панель галегеї</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Редагування галереї</h2>
        </div>
        <div class="col-2">
            <a href="../index.php" class="d-block btn btn-primary">Назад</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Фото</th>
                    <th>Додаткові опції</th>
                    <th></th>
                </tr>
                </thead>
                <?php $galerys = get_galerys();
                foreach ($galerys as $galery):?>
                    <tbody>
                    <tr>
                        <th scope="row"><?=$galery['id_galery'];?></th>
                        <td><?=$galery['img_galery']?></td>
                        <td><a href="delete-galery.php?galery_id=<?=$galery['id_galery']?>" class="btn btn-danger">Видалити</a></td>
                    </tr>
                    </tbody>
                <?php endforeach;?>
            </table>
            <a href="add-galery.php" class="btn btn-success">Додати фото</a>
        </div>
    </div>
</div>
</body>
</html>