<?php
include_once "include/header.php";

$news_id = $_GET['news_id'];
if (!is_numeric($news_id))
    header('404.php');

$new = get_news_by_id($news_id);
?>


                <li class="nav-item"><a href="index.php" class="nav-link pl-0">Головна</a></li>
                <li class="nav-item"><a href="history.php" class="nav-link">Історія</a></li>
                <li class="nav-item"><a href="teacher.php" class="nav-link">Викладачі</a></li>
                <li class="nav-item active"><a href="news.php" class="nav-link">Новини</a></li>
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
                <h1 class="mb-2 bread"><?=$new['title']?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Головна <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="news.php">Новини <i class="ion-ios-arrow-forward"></i></a></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3"><?=$new['title']?></h2>
                <p>
                    <img src="<?=$new['img'];?>" class="img-thumbnail" alt="...">
                </p>
                <p class="card-text" ><?=$new['content'];?></p>
                <a href="news.php" class="btn btn-primary">&larr; Повернутися назад</a>
            </div>
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3>Останні новини</h3>
                    <?php $news = get_last_news();?>
                    <?php foreach ($news as $new):?>
                        <div class="block-21 mb-4 d-flex">
                            <a href="post-news.php?news_id=<?=$new['id']?>">
                                <img class="blog-img-news mr-4 img-thumbnail" src="<?=$new['img'];?>" alt="...">
                            </a>
                            <div class="text ml-4">
                                <h3 class="heading"><a href="post-news.php?news_id=<?=$new['id']?>"><?=$new['title']?></a></h3>
                                <div class="meta">
                                    <div><a href="post-news.php?news_id=<?=$new['id']?>"><span>Автор:</span> <?=$new['LastName'];?> <?=$new['FirstName'];?></a></div>
                                </div>
                                <div class="meta">
                                    <div><a href="post-news.php?news_id=<?=$new['id']?>"><span class="icon-calendar"></span> <?=$new['date'];?></a></div>
                                </div>
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