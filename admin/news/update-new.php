<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
$db = new PDO('mysql:host=localhost; dbname=tsk_dilovod;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !="") {
    move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
    $fileName = "../images/" . $_FILES["image"]["name"];
} else {
    $fileName = "../images/no-image.png";
}

$sql = "UPDATE news SET 
        title = :title, 
        content = :content,
        img = :img,
        date = :date 
        WHERE id = :id";
$stmt = $db->prepare($sql);

$stmt->bindValue(":id", $_POST["id"]);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":content", $_POST["content"]);
$stmt->bindValue(":img", $fileName);
$stmt->bindValue(":date", $_POST["date"]);

$stmt->execute();
header("location:index-new.php");