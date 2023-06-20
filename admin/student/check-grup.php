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

$sql = "INSERT INTO grupa (year, name, curator, img)
           VALUES (:year, :name, :curator, :img)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":year", $_POST["year"]);
$stmt->bindValue(":name", $_POST["name"]);
$stmt->bindValue(":curator", $_POST["curator"]);
$stmt->bindValue(":img", $fileName);

$stmt->execute();
header("location:index-grup.php");


