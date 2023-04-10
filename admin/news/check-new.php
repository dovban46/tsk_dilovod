<?php
include "../../database/conf.php";
session_start();
include "../../database/function.php";

include "../conect-db.php";

if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !="") {
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../images/" . $_FILES["image"]["name"]);
    $fileName = "images/" . $_FILES["image"]["name"];
} else {
    $fileName = "images/no-image.png";
}

$sql = "INSERT INTO news (title, content, img, date, avtor)
           VALUES (:title, :content, :img, :date, :avtor)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":content", $_POST["content"]);
$stmt->bindValue(":img", $fileName);
$stmt->bindValue(":date", $_POST["date"]);
$stmt->bindValue(":avtor", $_POST["avtor"]);

$stmt->execute();
header("location:index-new.php");


