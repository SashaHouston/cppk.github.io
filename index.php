<?php
    include("path.php");
    include("app/database/db.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/style.css"> <!-- Подключение css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Xby</title>
</head>

<body>

<?php include("app/include/header.php"); ?>

    <!-- Блок main START-->
    <div class="container">

        <!-- Блок карусели start-->
        <div class="row">
            <h5 class="slider-title">Топ публикации</h5>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">Slide label</a></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="">Slide label 2</a></h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Блок карусели END-->

        <div class="content row">

            <!-- Main Content -->
            <div class = "main-content col-md-9 col-12">
                <h3>Последние публикации</h3>

                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/0.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/0.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/0.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/0.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/0.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/0.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Прикольная статья на тему динамического сайта...</a>
                        </h3>
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Main Content END -->

            <!-- Sidebar Content -->
            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                    </form>
                </div>

                <div class="section topics">
                    <h3>Категории</h3>
                    <ul class="ren-3">
                        <li class="ren-1"><a class="ren-2" href="#">Программирование</a></li>
                        <li class="ren-1"><a class="ren-2" href="#">Дизайн</a></li>
                        <li class="ren-1"><a class="ren-2" href="#">Визуализация</a></li>
                        <li class="ren-1"><a class="ren-2" href="#">Кейсы</a></li>
                        <li class="ren-1"><a class="ren-2" href="#">Мотивация</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            <!-- Sidebar Content END-->


<?php include("app/include/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>