<?php
session_start();
include "../../database/function.php";

include "../conect-db.php";


$sql = "UPDATE teachers SET 
        LastName = :LastName,
        FirstName = :FirstName,
        PoBatkovi = :PoBatkovi,
        position = :position,
        content_teacher = :content_teacher 
        WHERE id_teacher = :id_teacher";

$stmt = $db->prepare($sql);
$stmt->bindValue(":id_teacher", $_POST["id_teacher"]);
$stmt->bindValue(":LastName", $_POST["LastName"]);
$stmt->bindValue(":FirstName", $_POST["FirstName"]);
$stmt->bindValue(":PoBatkovi", $_POST["PoBatkovi"]);
$stmt->bindValue(":position", $_POST["position"]);
$stmt->bindValue(":content_teacher", $_POST["content_teacher"]);

$stmt->execute();
header("location:index-teacher.php");

