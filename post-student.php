<?php
include_once "include/header.php";

$years = $_GET['grupa_id'];
if (!is_numeric($years))
    header('404.php');

$year = get_grupa_name($years);


?>
<link rel="stylesheet" href="css/list.css">

<li class="nav-item"><a href="index.php" class="nav-link pl-0">Головна</a></li>
<li class="nav-item"><a href="history.php" class="nav-link">Історія</a></li>
<li class="nav-item"><a href="teacher.php" class="nav-link">Викладачі</a></li>
<li class="nav-item"><a href="news.php" class="nav-link">Новини</a></li>
<div class="dropdown collapse navbar-collapse navbar-nav mr-auto">
    <li class="nav-item"><a href="#" class="nav-link">Навчальна діяльність <i class="ion-ios-arrow-down"></i></a></li>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="nav-item dropdown-item" href="nav-plan.php" class="nav-link">Навчальний план</a></li>
        <li><a class="nav-item dropdown-item" href="kursovi.php" class="nav-link">Курсові роботи</a></li>
        <li><a class="nav-item dropdown-item" href="educational.php" class="nav-link">Виховні</a></li>
    </ul>
</div>
<li class="nav-item active"><a href="post-student.php?grupa_id=1" class="nav-link">Випускники</a></li>
<li class="nav-item"><a href="galery.php" class="nav-link">Галерея</a></li>
<li class="nav-item"><a href="contact.php" class="nav-link">Контакти</a></li>
</ul>
</div>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg1.png');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Випускники <?=$year['year'];?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Головна <i class="ion-ios-arrow-forward"></i></a></span> <span>Випускники <i class="ion-ios-arrow-forward"> <?=$year['year'];?></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php $grupa = get_grupa();?>
            <?php foreach ($grupa as $grup):?>
            <div class="col-md-2 col-lg-1 ">
                <div class="mb-5 ml-md-4 ">
                    <p class="mb-0"><a href="post-student.php?grupa_id=<?=$grup['id_grupa'];?>" class="btn btn-primary"><?=$grup['year'];?></span></a></p>
                </div>
            </div>
            <?php endforeach; ?>
            <?php
            $students_id = $_GET['grupa_id'];
            $students = get_student_by_grupa ($students_id);
            $grupa_id= $_GET['grupa_id']
            ?>

            <div class="container-fluid px-4">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <?php
                        $sql = "SELECT t.LastName AS teachers_LastName
                        FROM teachers t
                        JOIN grupa g ON t.id_teacher = g.curator
                        WHERE g.id_grupa = $grupa_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <h3><span>Куратор: <?=$row["teachers_LastName"]?> </span></h3>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php
            $k=0;
            foreach ($students as $student):
                $k+=1?>
                        <div class="col-md-6 col-lg-4">
                            <div class="ftco-footer-widget mb-5 ml-md-4">
                            <ol class="list-counter-circle ">
                                <li><span class="number_student"><?=$k?></span> <?=$student['LastName']?> <?=$student['FirstName']?> <?=$student['PoBatkovi']?></li>
                            </ol>
                            </div>
                        </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<?php
include_once "include/footer.php";
?>
