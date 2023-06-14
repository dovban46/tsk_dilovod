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

$student_id = $_GET['student_id'];
if (!is_numeric($student_id))
    header('location: ../404.php');

$student = delete_student($student_id);
header('location: index-student.php');
