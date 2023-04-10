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
    <title>Редагування новини</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h3>Редагування новини</h3>
    </div>
    <div class="row">
        <div class="col">
            <?php
            $news_id = $_GET['news_id'];
            if (!is_numeric($news_id))
                header('location: ../404.php');

            $new = get_news_by_id($news_id);
            ?>
            <form action="update-new.php" method="post" enctype="multipart/form-data">
                <input type="text" name="id" readonly ="readonly " value="<?=$new['id']?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Введіть назву новини</label>
                    <input type="text" name="title" value="<?=$new['title']?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Введіть текст новини</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?=$new['content']?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть дату публікації</label>
                    <input type="date" name="date" class="form-control-file" id="exampleFormControlFile1" value="<?=$new['date']?>">
                </div>
                <button class="btn btn-primary" type="submit">Обновити запис</button>
                <a href="index-new.php" class="btn btn-primary">Скасувати</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
