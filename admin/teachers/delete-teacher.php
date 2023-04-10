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

$teacher_id = $_GET['teacher_id'];
if (!is_numeric($teacher_id))
    header('location: ../404.php');

$teacher = delete_teacher($teacher_id);
header('location: index-teacher.php');
