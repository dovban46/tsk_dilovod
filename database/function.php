<?php
include "conf.php";

//додання новини
function get_news() {
    global $conn;
    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $news;
}

//додання викладачів
function get_teachers() {
    global $conn;
    $sql = "SELECT * FROM teachers";
    $result = mysqli_query($conn, $sql);

    $teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $teachers;
}

//пергляд новин
function get_news_by_id ($news_id) {
    global $conn;
    $sql = "SELECT * FROM news WHERE id = ".$news_id;
    $result = mysqli_query($conn, $sql);

    $new = mysqli_fetch_assoc($result);
    return $new;
}

//пергляд викладачів
function get_teacher_by_id ($teacher_id) {
    global $conn;
    $sql = "SELECT * FROM teachers WHERE id_teacher = ".$teacher_id;
    $result = mysqli_query($conn, $sql);

    $teacher = mysqli_fetch_assoc($result);
    return $teacher;
}

//видалення новини
function delete_new($news_id) {
    global $conn;
    $news_id = mysqli_real_escape_string($conn, $news_id);

    $sql = "DELETE FROM news WHERE id = " .$news_id;
    $result = mysqli_query($conn, $sql);
}

//видалення викладача
function delete_teacher($teacher_id) {
    global $conn;
    $teacher_id = mysqli_real_escape_string($conn, $teacher_id);

    $sql = "DELETE FROM teachers WHERE id_teacher = " .$teacher_id;
    $result = mysqli_query($conn, $sql);
}