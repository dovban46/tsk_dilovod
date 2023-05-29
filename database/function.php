<?php
include "conf.php";

//новини
function get_news() {
    global $conn;
    $sql = "SELECT * FROM teachers INNER JOIN news ON teachers.id_teacher = news.avtor ORDER BY `id` DESC";
    $result = mysqli_query($conn, $sql);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $news;
}

//викладачі
function get_teachers() {
    global $conn;
    $sql = "SELECT * FROM teachers";
    $result = mysqli_query($conn, $sql);

    $teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $teachers;
}

//користувачі
function get_users() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $user;
}

//галерея
function get_galerys() {
    global $conn;
    $sql = "SELECT * FROM galery";
    $result = mysqli_query($conn, $sql);

    $galery = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $galery;
}

//історія
function get_history() {
    global $conn;
    $sql = "SELECT * FROM history";
    $result = mysqli_query($conn, $sql);

    $history = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $history;
}


//пергляд новин
function get_news_by_id ($news_id) {
    global $conn;
    $sql = "SELECT * FROM news WHERE id  = ".$news_id;
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

//видалення галереї
function delete_galery($galery_id) {
    global $conn;
    $galery_id = mysqli_real_escape_string($conn, $galery_id);

    $sql = "DELETE FROM galery WHERE id_galery = " .$galery_id;
    $result = mysqli_query($conn, $sql);
}


//останні новини
function get_last_news() {
    global $conn;
    $sql = "SELECT * FROM teachers INNER JOIN news ON teachers.id_teacher = news.avtor ORDER BY `id` DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $news;
}

//випускники за групою
function get_student_by_grupa ($students_id) {
    global $conn;

    $students_id = mysqli_real_escape_string($conn, $students_id);
    $sql = "SELECT * FROM students WHERE grupa = " .$students_id. " ORDER BY `LastName` ";
    $result = mysqli_query($conn, $sql);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $students;
}

//назва групи
function get_grupa_name ($grupa_id) {
    global $conn;
    $grupa_id = mysqli_real_escape_string($conn, $grupa_id);
    $sql= "SELECT * FROM grupa WHERE id_grupa = " . $grupa_id;
    $result = mysqli_query($conn, $sql);
    $grupa = mysqli_fetch_assoc ($result);
    return $grupa;
}

//пергляд груп
function get_grupa() {
    global $conn;
    $sql = "SELECT * FROM grupa ORDER BY `year` DESC ";
    $result = mysqli_query($conn, $sql);

    $grup = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $grup;
}





