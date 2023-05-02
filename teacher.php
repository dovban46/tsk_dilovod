<?php
include_once "include/header.php";
?>

                <li class="nav-item"><a href="index.php" class="nav-link pl-0">Головна</a></li>
                <li class="nav-item"><a href="history.php" class="nav-link">Історія</a></li>
                <li class="nav-item active"><a href="teacher.php" class="nav-link">Викладачі</a></li>
                <li class="nav-item"><a href="news.php" class="nav-link">Новини</a></li>
                <div class="dropdown collapse navbar-collapse navbar-nav mr-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Навчальна діяльність <i class="ion-ios-arrow-down"></i></a></li>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="nav-item dropdown-item" href="nav-plan.php" class="nav-link">Навчальний план</a></li>
                        <li><a class="nav-item dropdown-item" href="kursovi.php" class="nav-link">Курсові роботи</a></li>
                        <li><a class="nav-item dropdown-item" href="educational.php" class="nav-link">Виховні</a></li>
                    </ul>
                </div>
                <li class="nav-item"><a href="post-student.php?grupa_id=1" class="nav-link">Випускники</a></li>
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
                <h1 class="mb-2 bread">Педагогічний колектив</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Головна <i class="ion-ios-arrow-forward"></i></a></span> <span>Викладачі <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container-fluid px-4">
        <div class="row">
            <?php $teachers = get_teachers();?>
            <?php foreach ($teachers as $teacher):?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="mx-auto align-self-stretch block-20 d-flex ">
                            <img src="<?=$teacher['img_teacher']?>"  alt="...">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3><?=$teacher['LastName']?> <?=$teacher['FirstName']?> <?=$teacher['PoBatkovi']?></h3>
                        <div class="faded">
                            <p><?=$teacher['position']?></p>
                            <ul class="ftco-social text-center">
                                <p class="mb-0"><a href="post-teacher.php?teacher_id=<?=$teacher['id_teacher']?>" class="btn btn-primary">Більше <span class="ion-ios-arrow-round-forward"></span></a></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
include_once "include/footer.php";
?>
