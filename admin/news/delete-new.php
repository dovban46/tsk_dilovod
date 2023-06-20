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

$news_id = $_GET['news_id'];
if (!is_numeric($news_id))
    header('location: ../404.php');

$new = delete_new($news_id);
header('location: index-new.php');
