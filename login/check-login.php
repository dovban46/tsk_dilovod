<?php
include "../database/function.php";

$users = get_users();
foreach ($users as $user):
$login = $user['login'];
$password =$user['password'];
endforeach;

if ($login == $_POST['login'] && $password == $_POST['password']){
    session_start();

    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];

    header('location: ../admin/index.php');
} else {
    header('location: index.php');
}