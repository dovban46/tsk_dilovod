<?php
session_start();
include "../../database/function.php";

include "../conect-db.php";



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