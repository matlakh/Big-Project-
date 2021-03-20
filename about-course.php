<?php 
$id = $_GET['id'];
session_start();
if (!empty($_SESSION['login']) && !empty($_SESSION['password'])) {
    
require_once('php/connect.php');
$db_data = mysqli_query($connect, "SELECT * FROM `courses` where `id` = '$id'");
$course = mysqli_fetch_assoc($db_data);
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$db_userData = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
} else {
header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT School">
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css"> -->
    <link rel="shortcut icon" href="./images/user-page/logo.svg" type="img/svg">
    <link rel="stylesheet" href="css/styles.css">
    <title>О курсе</title>
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <img src="images/icon/logo-loader.svg" alt="logo">
        </div>
    </div>
    <section class="admin__container">
        <div class="left">
            <div class="admin__nav">
                <div class="logo">
                    <a class="logo__link" href="index.php">
                        <img class="logo__img" src="images/icon/logo-admin.svg" alt="logo">
                    </a>
                </div>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="admin.php" class="nav__link">
                            <img class="nav__icon" src="images/icon/home.svg" alt="home">
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <img class="nav__icon" src="images/icon/course.svg" alt="course">
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <img class="nav__icon" src="images/icon/user.svg" alt="user">
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <img class="nav__icon" src="images/icon/mail.svg" alt="mail">
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <img class="nav__icon" src="images/icon/setting.svg" alt="setting">
                        </a>
                    </li>
                </ul>
                <div class="logout">
                    <a class="logout__link" href="php/logout.php">
                        <img class="logout__img" src="images/icon/logout.svg" alt="logout">
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <h2 class="admin__container-title">О курсе</h2>
            <!-- burger-menu start -->
            <div class="burger-menu__button-wrap">
                <div class="burger-menu__button">
                    <span class="burger-menu__line"></span>
                </div>
            </div>
            <div class="burger-menu">
                <div class="logo">
                    <a class="burger-menu__link" href="index.php">
                        <img class="burger-menu__logo" src="images/icon/logo-admin.svg" alt="logo">
                    </a>
                </div>
                <ul class="burger-menu__list">
                    <li class="burger-menu__item">
                        <a href="admin.html" class="burger-menu__link">
                            <img class="nav__icon" src="images/icon/home.svg" alt="home">
                        </a>
                        <span class="burger-menu__item-name">Главная</span>
                    </li>
                    <li class="burger-menu__item">
                        <a href="#" class="burger-menu__link">
                            <img class="nav__icon" src="images/icon/course.svg" alt="course">
                        </a>
                        <span class="burger-menu__item-name">Курсы</span>
                    </li>
                    <li class="burger-menu__item">
                        <a href="#" class="burger-menu__link">
                            <img class="nav__icon" src="images/icon/user.svg" alt="user">
                        </a>
                        <span class="burger-menu__item-name">Аккаунт</span>
                    </li>
                    <li class="burger-menu__item">
                        <a href="#" class="burger-menu__link">
                            <img class="nav__icon" src="images/icon/mail.svg" alt="mail">
                        </a>
                        <span class="burger-menu__item-name">Оповещения</span>
                    </li>
                    <li class="burger-menu__item">
                        <a href="#" class="burger-menu__link">
                            <img class="nav__icon" src="images/icon/setting.svg" alt="setting">
                        </a>
                        <span class="burger-menu__item-name">Настройки</span>
                    </li>
                </ul>
                <div class="logout">
                    <a class="burger-menu__link" href="php/logout.php">
                        <img class="logout__img" src="images/icon/logout.svg" alt="logout">
                    </a>
                    <span class="burger-menu__item-name">Выйти</span>
                </div>
            </div>
            <!-- burger-menu end -->
            <!-- course-info-cart start -->
            <div class="course__container">
                <?php 
        if ($_SESSION['isAdmin']){
    ?>
                <h2 class="course__container-title">О курсе</h2>
                <div class="card__container">
                    <div class="card__single">
                        <div class="card__info">
                            <h3 class="card__title">Студентов</h3>
                            <span class="card__count">27</span>
                            <span class="card__procent">85% нових студентов</span>
                            <div class="card__image">
                            <img class="card__image-icon" src="images/icon/user.svg" alt="user">
                        </div>
                        </div>
                       
                    </div>
                    <div class="card__single">
                        <div class="card__info">
                            <h3 class="card__title">Продажы</h3>
                            <span class="card__count">250</span>
                            <span class="card__procent">45% нових продаж</span>
                            <div class="card__image">
                            <img class="card__image-icon" src="images/icon/cart.svg" alt="user">
                        </div>
                        </div>
                       
                    </div>
                    <div class="card__single">
                        <div class="card__info">
                            <h3 class="card__title">Комметарии</h3>
                            <span class="card__count">85</span>
                            <span class="card__procent">30% нових комментариев</span>
                            <div class="card__image">
                            <img class="card__image-icon" src="images/icon/comments.svg" alt="user">
                        </div>
                        </div>
                        
                    </div>
                    <div class="card__single">
                        <div class="card__info">
                            <h3 class="card__title">Рейтинг</h3>
                            <span class="card__count">4,9</span>
                            <span class="card__procent">85% нових оценок</span>
                            <div class="card__image">
                            <img class="card__image-icon" src="images/icon/star.svg" alt="user">
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="chart__container">
                    <h3 class="chart__title">Статистика оценок за неделю</h3>
                    <canvas id="myChart" style="width: 100%; height: 300px;"></canvas>
                </div>

<? } else {?> 

<div class="mix course__single " data-time="<?php echo $course['created_at']?>" data-rating="<?php echo $course['rating']?>">
            <div class="course__name">
              <div class="course__logo">
                <img class="course__logo-img" src="<?php echo $course['img']?>" alt="course logo">
              </div>
              <div class="course__info">
                <h3 class="course__info-name"><?php echo $course['title']?></h3>
                <span class="course__info-author">Автор: <?php echo $course['author']?></span>
              </div>
            </div>

            <div class="course__time">
              <img class="course__time-icon" src="images/icon/clock.svg" alt="icon">
              <span class="course__time-duration"><?php echo $course['time']?></span>
            </div>
            <div class="course__rating">
              <img class="course__rating-icon" src="images/icon/rating.svg" alt="rating-icon">
              <span class="course__rating-score"><?php echo $course['rating']?></span>
            </div>
                    <p class="course__single"><?php echo $course['about']?></p> 

    <?}?>
            </div>
            <!-- course-info-cart end -->
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="js/scripts.js">
    </script>
</body>

</html>