<?php
session_start();
include "../../database/function.php";

include "../conect-db.php";



$sql = "UPDATE educational SET 
        content = :content
        WHERE id = :id";
$stmt = $db->prepare($sql);

$stmt->bindValue(":id", $_POST["id"]);
$stmt->bindValue(":content", $_POST["content"]);


$stmt->execute();
header("location:edit-educational.php");