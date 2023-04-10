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
$galery_id = $_GET['galery_id'];
if (!is_numeric($galery_id))
    header('location: ../404.php');

$galery = delete_galery($galery_id);
header('location: index-galery.php');
