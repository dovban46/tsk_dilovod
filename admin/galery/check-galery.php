<?php
include "../../database/conf.php";
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
$db = new PDO('mysql:host=localhost; dbname=tsk_dilovod;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !="") {
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/" . $_FILES["image"]["name"]);
    $fileName = "images/" . $_FILES["image"]["name"];
}

$sql = "INSERT INTO galery (img_galery)
           VALUES (:img_galery)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":img_galery", $fileName);

$stmt->execute();
header("location:index-galery.php");

