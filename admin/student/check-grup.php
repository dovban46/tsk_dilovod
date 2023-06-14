<?php
include "../../database/conf.php";
session_start();
include "../../database/function.php";

include "../conect-db.php";


$sql = "INSERT INTO grupa (year, name, curator)
           VALUES (:year, :name, :curator)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":year", $_POST["year"]);
$stmt->bindValue(":name", $_POST["name"]);
$stmt->bindValue(":curator", $_POST["curator"]);

$stmt->execute();
header("location:index-grup.php");


