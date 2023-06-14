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

$sql = "INSERT INTO teachers (LastName, FirstName, PoBatkovi, position, img_teacher, content_teacher)
           VALUES (:LastName, :FirstName, :PoBatkovi, :position, :img_teacher, :content_teacher)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":LastName", $_POST["LastName"]);
$stmt->bindValue(":FirstName", $_POST["FirstName"]);
$stmt->bindValue(":PoBatkovi", $_POST["PoBatkovi"]);
$stmt->bindValue(":position", $_POST["position"]);
$stmt->bindValue(":img_teacher", $fileName);
$stmt->bindValue(":content_teacher", $_POST["content_teacher"]);


$stmt->execute();
header("location:index-student.php");


