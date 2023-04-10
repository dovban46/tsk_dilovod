<?php
session_start();
include "../database/function.php";

$users = get_users();
foreach ($users as $user):
    $login = $user['login'];
    $password =$user['password'];
endforeach;

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <title>Гусятинська ЦК діловодства</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="index.php">ЦК<span>Діловодства</span></a>
            </div>
            <div class="col-md-4 d-flex align-items-center py-4">
                <p class="navbar-brand">Адмін-панель</p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Меню
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="logout.php" class="nav-link pl-0">Головна</a></li>
                <li class="nav-item"><a href="../history.php" class="nav-link">Історія</a></li>
                <li class="nav-item"><a href="../teacher.php" class="nav-link">Викладачі</a></li>
                <li class="nav-item"><a href="../news.php" class="nav-link">Новини</a></li>
                <div class="dropdown collapse navbar-collapse navbar-nav mr-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Навчальна діяльність <i class="ion-ios-arrow-down"></i></a></li>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="nav-item dropdown-item" href="../nav-plan.php" class="nav-link">Навчальний план</a></li>
                        <li><a class="nav-item dropdown-item" href="../kursovi.php" class="nav-link">Курсові роботи</a></li>
                        <li><a class="nav-item dropdown-item" href="../ educational.php" class="nav-link">Виховні</a></li>
                    </ul>
                </div>
                <li class="nav-item"><a href="../post-student.php?grupa_id=1" class="nav-link">Випускники</a></li>
                <li class="nav-item"><a href="../galery.php" class="nav-link">Галерея</a></li>
                <li class="nav-item"><a href="../contact.php" class="nav-link">Контакти</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="text-center">

    <section class="ftco-section bg-light">
        <div class="container-fluid px-4">
            <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img align-self-stretch">
                                <img src="../images/teacher-admin.png"  alt="...">
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>Викладачі</h3>
                                <div class="faded">
                                    <a href="teachers/index-teacher.php" class="btn btn-primary">Змінити</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img align-self-stretch">
                            <img src="../images/news-admin.png"  alt="...">
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Новини</h3>
                            <div class="faded">
                                <a href="news/index-new.php" class="btn btn-primary">Змінити</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img align-self-stretch">
                            <img src="../images/student-admin.png"  alt="...">
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Випусники</h3>
                            <div class="faded">
                                <a href="#" class="btn btn-primary">Змінити</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img align-self-stretch">
                            <img src="../images/gallery-admin.png"  alt="...">
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Галерея</h3>
                            <div class="faded">
                                <a href="galery/index-galery.php" class="btn btn-primary">Змінити</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
