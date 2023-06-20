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
    <div class="slider-item" style="background-image:url(images/image10.png);">
    </div>
    <div class="slider-item" style="background-image:url(images/image5.PNG);">
    </div>
    <div class="slider-item" style="background-image:url(images/image6.PNG);">
    </div>
    <div class="slider-item" style="background-image:url(images/image3.PNG);">
    </div>
    <div class="slider-item" style="background-image:url(images/image4.jpg);">
    </div>
</section>
<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-teacher"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Досвітчені викладачі</h3>
                        <p>Досвідчені викладачі коледжу забезпечують якісну освіту, практичні знання та навички, необхідні для успішної кар'єри у сучасному світі.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-reading"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Спеціальне навчання</h3>
                        <p>Наше навчання забезпечує якісну освіту, підтримку в особистому розвитку для підготовки студентів до майбутніх успіхів.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Велика бібліотека</h3>
                        <p>Велика бібліотека нашого коледжу є скарбницею знань, яка надає студентам доступ до розширеної колекції ресурсів.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-diploma"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Наукові досягнення</h3>
                        <p>Наші наукові досягнення вражають своєю різноманітністю, постійна участь у конференціях та винахідницьких проєктах підтверджує наше бажання пошуку нових знань та інновацій.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg1.png);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
            <div class="col-md-12 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center" style="background-image: url(images/img_video.jpg); height: 550px;">
                    <div class="video justify-content-center">
                        <a href="images/video.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once "include/footer.php";
?>
