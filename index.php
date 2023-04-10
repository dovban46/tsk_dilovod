<?php
include_once "include/header.php";
?>
                <li class="nav-item active"><a href="index.php" class="nav-link pl-0">Головна</a></li>
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
                <li class="nav-item"><a href="post-student.php?grupa_id=1" class="nav-link">Випускники</a></li>
                <li class="nav-item"><a href="galery.php" class="nav-link">Галерея</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Контакти</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/image3.PNG);">
        <div class="overlay"></div>
    </div>
    <div class="slider-item" style="background-image:url(images/image5.PNG);">
        <div class="overlay"></div>
    </div>
    <div class="slider-item" style="background-image:url(images/image6.PNG);">
        <div class="overlay"></div>
    </div>
    <div class="slider-item" style="background-image:url(images/image7.PNG);">
        <div class="overlay"></div>
    </div>
    <div class="slider-item" style="background-image:url(images/image4.PNG);">
        <div class="overlay"></div>
    </div>
</section>


<?php
include_once "include/footer.php";
?>
