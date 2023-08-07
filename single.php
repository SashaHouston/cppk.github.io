<?php include("path.php"); ?>

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

    <title>Xby_sig_1</title>
</head>

<body>

<?php include("app/include/header.php"); ?>

    </div>
    <!-- Блок main START-->
    <div class="container">
        <div class="content row">
            <!-- Main Content -->
            <div class = "main-content col-md-9 col-12">
                <h3>Заголовок текста</h3>

                <div class="single_post">
                    <div class="img col-12">
                        <img src="assets/images/3.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="info">
                        <i class="far fa-user"> Имя автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                    </div>
                    <div class="post_text col-12">
                        <h3>Заголововок третьего уровня</h3>
                        <p>Текст</p>
                    </div>
                </div>

            </div>

            <!-- sidebar Content -->
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

    <!-- Main Content END -->

<?php include("app/include/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>