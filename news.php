<?php
include_once "include/header.php";
?>

                <li class="nav-item"><a href="index.php" class="nav-link pl-0">Головна</a></li>
                <li class="nav-item"><a href="history.php" class="nav-link">Історія</a></li>
                <li class="nav-item"><a href="teacher.php" class="nav-link">Викладачі</a></li>
                <li class="nav-item active"><a href="news.php" class="nav-link">Новини</a></li>
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
                <h1 class="mb-2 bread">Новини</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Головна <i class="ion-ios-arrow-forward"></i></a></span> <span>Новини <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php $news = get_news();?>
            <?php foreach ($news as $new):?>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="post-news.php?news_id=<?=$new['id']?>" class="block-20 d-flex align-items-end" style='background-image: "<img src="<?=$new['img']?>""'>
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><?=$new['title']?></h3>
                        <p><?= mb_substr($new['content'], 0,150, 'UTF-8') . '...'?></p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="post-news.php?news_id=<?=$new['id']?>" class="btn btn-primary">Більше <span class="ion-ios-arrow-round-forward"></span></a></p>
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