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

$grupa_id = $_GET['grup_id'];
if (!is_numeric($grupa_id))
    header('location: ../404.php');

$grup = delete_grupa($grupa_id);
header('location: index-grup.php');
