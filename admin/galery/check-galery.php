<?php
include "../../database/conf.php";
session_start();
include "../../database/function.php";

include "../conect-db.php";

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

