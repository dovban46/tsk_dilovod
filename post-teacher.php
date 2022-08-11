<?php
include_once "include/header.php";

$teacher_id = $_GET['teacher_id'];
if (!is_numeric($teacher_id))
    header('404.php');

$teacher = get_teacher_by_id($teacher_id);
?>
                <li class="nav-item"><a href="index.php" class="nav-link pl-0">Головна</a></li>
                <li class="nav-item"><a href="history.php" class="nav-link">Історія</a></li>
                <li class="nav-item active"><a href="teacher.php" class="nav-link">Викладачі</a></li>
                <li class="nav-item"><a href="news.php" class="nav-link">Новини</a></li>
                <li class="nav-item"><a href="nav-plan.php" class="nav-link">Навчальний план</a></li>
                <li class="nav-item"><a href="kursovi.php" class="nav-link">Курсові роботи</a></li>
                <li class="nav-item"><a href="educational.php" class="nav-link">Виховні</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Випускники</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Галерея</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Контакти</a></li>

            </ul>
        </div>
    </div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread"><?=$teacher['name']?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Головна <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="teacher.php">Викладачі <i class="ion-ios-arrow-forward"></i></a></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p>
                    <img src="<?=$teacher['img_teacher'];?>" class="card-img-top" alt="...">
                </p>
                <h2 class="mb-3"><?=$teacher['name']?></h2>
                <p class="card-text"><?=$teacher['position'];?></p>
                <p class="card-text"><?=$teacher['content_teacher'];?></p>
                <a href="teacher.php" class="btn btn-primary">&larr; Повернутися назад</a>
            </div>

            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3>Педагогічний колектив</h3>
                    <?php $teachers = get_teachers();?>
                    <?php foreach ($teachers as $teacher):?>
                        <div class="block-21 mb-4 d-flex">
                            <img src="<?=$teacher['img_teacher'];?>" class="card-img-top" alt="...">
                            <div class="text">
                                <h3 class="heading"><a href="post-teacher.php?teacher_id=<?=$teacher['id_teacher']?>"><?=$teacher['name']?></a></h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once "include/footer.php";
?>
