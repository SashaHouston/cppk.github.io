<header class="container-fluid" >
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>">Xby</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul class="team">
                    <li class="va"><a href="<?php echo BASE_URL ?>">Главная</a> </li>
                    <li class="va"><a href="<?php echo BASE_URL . 'about.php'?>">О нас</a> </li>
                    <li class="va"><a href="#">Услуги</a> </li>

                    <li class="va">
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="#">
                                <img src="assets/images/10.png" height="25" width="25">
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul class="team">
                                <?php if ($_SESSION['admin']): ?>
                                    <li class="va"><a href="#">Админ панель</a> </li>
                                <?php endif; ?>
                                <li class="va"><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> </li>
                            </ul>
                        <?php else: ?>
                        <a href="<?php echo BASE_URL . "log.php"; ?>">
                            <img src="assets/images/10.png" height="25" width="25">
                            Войти
                        </a>
                            <ul class="team">
                                <li class="va"><a href="<?php echo BASE_URL . "reg.php"; ?>">Регистрация</a> </li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header