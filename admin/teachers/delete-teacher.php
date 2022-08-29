<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
include_once "../../database/conf.php";
include "../../database/function.php";
$teacher_id = $_GET['teacher_id'];
if (!is_numeric($teacher_id))
    header('location: ../404.php');

$teacher = delete_teacher($teacher_id);
header('location: index-teacher.php');
