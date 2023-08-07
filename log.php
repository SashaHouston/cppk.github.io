<?php
    include("path.php");
    include "app/controllers/users.php";
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/style.css"> <!-- Подключение css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Xby_log</title>
</head>

<body>

<?php include("app/include/header.php"); ?>

    <!-- FORMA START-->
    <div class="container reg_form">
        <form class="row justify-content-md-center log" method="post" action="log.php">
            <h3>Авторизация</h3>
            <div class="mb-3 col-12 col-md-4 err">
                <p class="alarm"><?=$errMsg?></p>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput" class="form-label"><h5>Ваша почта (при регистрации)</h5></label>
                <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label"><h5>Пароль</h5></label>
                <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button name="button-log" type="submit" class="btn btn-secondary">Войти</button>
                <a href="aut.html">Зарегистрироваться</a>
            </div>
        </form>
    </div>
    <!-- FORMA END -->

<?php include("app/include/footer.php"); ?>