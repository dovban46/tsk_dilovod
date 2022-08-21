<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
include_once "../../database/conf.php";
include "../../database/function.php";
$galery_id = $_GET['galery_id'];
if (!is_numeric($galery_id))
    header('location: ../404.php');

$galery = delete_galery($galery_id);
header('location: index-galery.php');
