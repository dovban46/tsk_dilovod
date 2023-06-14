<?php
include "../../database/conf.php";
session_start();
include "../../database/function.php";

include "../conect-db.php";


$sql = "INSERT INTO students (LastName, FirstName, PoBatkovi, grupa)
           VALUES (:LastName, :FirstName, :PoBatkovi, :grupa)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":LastName", $_POST["LastName"]);
$stmt->bindValue(":FirstName", $_POST["FirstName"]);
$stmt->bindValue(":PoBatkovi", $_POST["PoBatkovi"]);
$stmt->bindValue(":grupa", $_POST["grupa"]);


$stmt->execute();
header("location:index-student.php");


