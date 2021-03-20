<?php 

$id = $_GET['id'];

session_start();
if ($_SESSION['isAdmin']) {
    
require_once('php/connect.php');
$db_data = mysqli_query($connect, "SELECT * FROM `cards` where `id` = '$id'");
$card = mysqli_fetch_assoc($db_data);
} else {
header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT School">
    <link rel="shortcut icon" href="./images/user-page/logo.svg" type="img/svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin</title>
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
            <h2 class="admin__container-title">Панель администратора</h2>
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
            <div class="course__container">
                <h2 class="course__container-title">Редактировать карточку</h2>
                <div class="form__container">
                    <form class="form form-admin" action="php/editCard.php" method="POST">
                        <input type="text" name="id" hidden value="<?php echo $card['id']?>">
                        <label class="form__label" for="name">Имя карточки</label>
                        <input class="form__input" name="title" data-validate-field="name" type="text" value="<?php echo $card['title']?>">
     
                        <label class="form__label" for="about">Описание</label>
                        <textarea class="form__input" type="text" name="about"><?php echo $card['about']?></textarea>
                        <input class="btn btn--green-form-add" type="submit" value="Изменить"></input>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/scripts.js">
    </script>
</body>

</html>