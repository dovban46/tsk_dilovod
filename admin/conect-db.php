<?php
    $users = get_users();
    foreach ($users as $user):
    $login = $user['login'];
    $password =$user['password'];
    endforeach;

    if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
header('location: ../login/index.php');
}
$db = new PDO('mysql:host=localhost; dbname=tsk_dilovod;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);