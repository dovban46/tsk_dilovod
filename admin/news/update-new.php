<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
$db = new PDO('mysql:host=localhost; dbname=tsk_dilovod;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$sql = "UPDATE news SET 
        title = :title, 
        content = :content,
        date = :date 
        WHERE id = :id";
$stmt = $db->prepare($sql);

$stmt->bindValue(":id", $_POST["id"]);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":content", $_POST["content"]);
$stmt->bindValue(":date", $_POST["date"]);

$stmt->execute();
header("location:index-new.php");