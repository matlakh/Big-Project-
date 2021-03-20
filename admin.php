<?php 

session_start();
if (!empty($_SESSION['login']) && !empty($_SESSION['password'])) {
    
require_once('php/connect.php');
$db_data = mysqli_query($connect, 'SELECT * FROM `courses`');

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$db_userData = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
} else {
header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IT School">
  <link rel="shortcut icon" href="./images/user-page/logo.svg" type="img/svg">
  <link rel="stylesheet" href="css/styles.css">
  <title>Личный кабинет</title>
</head>

<body>
  <div class="preloader">
    <div class="loader">
      <img src="images/icon/logo-loader.svg" alt="logo">
    </div>
  </div>
  <section class="admin__container">

  
  <?php 
        if ($_SESSION['isAdmin']){
    ?>   

<div class="left">
      <!-- menu start -->
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
      <!-- menu end -->
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
    </div>

    <div class="right">
      <h2 class="admin__container-title">Панель администратора</h2>
      <span class="line"></span>


      <!-- course start -->
      <div class="course__container">
        <h2 class="course__container-title">Курсы</h2>
        <div class="course__add">
        <a class="btn btn--primary" href="cards.php">Только факты</a>
          <a class="btn btn--green" href="add.php">Добавить курс</a>
        </div>

        <div class="course__nav">
          <a class="filter course__link" data-filter="all" data-sort="default" href="#">Все курсы</a>
          <a class="filter course__link" data-sort="time:desc" href="#">Новые</a>
          <a class="filter course__link" data-sort="rating:desc" href="#">Самые популярные</a>
        </div>
        <div class="course__wrap">
<?php while ($course = mysqli_fetch_assoc($db_data) ) {?>

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
            <div class="course__action-btn">
              <a class="btn btn--transparent" href="about-course.php?id=<?php echo $course['id']?>">О курсе</a>
              <a class="btn btn--primary" href="update.php?id=<?php echo $course['id']?>">Изменить курс</a>
              <a class="btn btn--alert" href="php/deleteCourse.php?id=<?php echo $course['id']?>">Удалить курс</a>
            </div>
          </div>     
<?}?>
      </div>
      <!-- course start end-->
    </div>

  </section>
<? } else {?> 

  <section class="main-navigation">

            <nav class="main-navigation__nav">
                <div class="main-navigation__logo"><a href="#"><img src="images/user-page/logo.svg" alt="logo"
                            class="logo-img"></a>
                </div>
                <ul class="main-navigation__nav-list">
                    <li class="main-navigation__nav-list--item">
                        <a href="#" class="item" title="Главная">
                            <img src="images/user-page/home.svg" alt="home">
                        </a>
                    </li>
                    <li class="main-navigation__nav-list--item">
                        <a href="#" class="item" title="Курсы">
                            <img src="images/user-page/more-curses.svg" alt="more-curses">
                        </a>
                    </li>
                    <li class="main-navigation__nav-list--item">
                        <a href="#" class="item" title="Аккаунт">
                            <img src="images/user-page/profile.svg" alt="profile">
                        </a>
                    </li>
                    <li class="main-navigation__nav-list--item">
                        <a href="#" class="item" title="Оповещения">
                            <img src="images/user-page/masseges.svg" alt="masseges">
                        </a>
                    </li>
                    <li class="main-navigation__nav-list--item">
                        <a href="#" class="item" title="Настройки">
                            <img src="images/user-page/settings.svg" alt="settings">
                        </a>
                    </li>
                </ul>
                <div class="main-navigation__log-out">
                    <a href="php/logout.php" class="main-navigation__log-out-item" title="Выход">
                        <img src="images/user-page/log-out.svg" alt="log-out">
                    </a>
                </div>
            </nav>
        </section>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li>
                    <img class="logo-img" src="images/user-page/logo.svg" alt="logo">
                </li>
                <li><a class="menu__item" href="#">
                        <img class="menu__item--img"  src="images/user-page/home.svg" alt="home">
                        <p>Главная</p>
                    </a></li>
                <li><a class="menu__item" href="#">
                        <img class="menu__item--img" src="images/user-page/more-curses.svg" alt="more-curses">
                        <p>Курсы</p>
                    </a></li>
                <li><a class="menu__item" href="#">
                        <img class="menu__item--img" src="images/user-page/profile.svg" alt="profile">
                        <p>Аккаунт</p>
                    </a></li>
                <li><a class="menu__item" href="#">
                        <img class="menu__item--img" src="images/user-page/masseges.svg" alt="masseges">
                        <p>Оповещения</p>
                    </a></li>
                <li><a class="menu__item" href="#">
                        <img class="menu__item--img" src="images/user-page/settings.svg" alt="settings">
                        <p>Настройки</p>
                    </a></li>
                <li><a class="menu__item"  href="php/logout.php">
                        <img class="menu__item--img" src="images/user-page/log-out.svg" alt="log-out">
                        <p>Выйти</p>
                    </a></li>
            </ul>
        </div>


    <section class="content-wrapper">

      <div class="main-header">
        <div class="main-header__text">
          <h1>Привет, <?php $user = mysqli_fetch_assoc($db_userData);
        echo $user['name'] ?>!</h1>
          <h5>Рад, что ты снова зашел</h5>
        </div>
        <div class="main-header__image">

          <img src="images/user-page/header-img.svg" alt="Hi!">

        </div>
      </div>

      <div class="my-course">
        <div class="my-course__name">
          <img src="images/user-page/spanish.svg" alt="spanish">
          <div class="my-course__name--title">
            <h6>Испанский язык</h6>
            <p>Автор: Alejandro Velazquez</p>
          </div>
        </div>

        <div class="my-course__progress">
          <img src="images/user-page/progress.svg" alt="progress">
          <button class="first-button">Продолжить</button>
        </div>
      </div>

      <div class="header">
        <div class="header__search">
          <form action="">
            <input type="submit" value="">
            <input type="search" placeholder="Введи название курса">
          </form>
        </div>

        <div class="header__prifile">
          
        <a href="#openModal" class="open_modal"><img src="images/user-page/profile-img.png"></a>

        <div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
            <a href="#">
                <img src="images/user-page/profile.svg" alt="profile">
                <p class="modal-body-text">
                  Аккаунт
                </p>
              </a>
              <a href="#">
                <img src="images/user-page/settings.svg" alt="setting">
                <p class="modal-body-text">
                  Настройки
                </p>
              </a>
              <a  href="php/logout.php">
                <img src="images/user-page/log-out.svg" alt="log-out">
                <p class="modal-body-text">
                  Выйти
                </p>
              </a>
            </div>
        </div>
    </div>
</div>
            
        </div>
      </div>

      <div class="progress">
        <div class="progress__ready">
          <h3 class="progress__count">11</h3>
          <p class="progress__name">Завершено курсов</p>
        </div>
        <div class="progress__active">
          <h3 class="progress__count">4</h3>
          <p class="progress__name">Активных курсов</p>
        </div>
      </div>

      <div class="statistic">
        <h3 class="statistic__title">
          Ваша статистика
        </h3>
        <h4 class="statistic__subtitle">Ваша статистка за неделю</h4>

        <img class="statistic__image" src="images/user-page/statistics.svg" alt="statistics">

      </div>

      <div class="more-curces">
        <h3 class="more-curces__title">Еще больше курсов</h3>
        <div class="more-curces__content">
          <div class="more-curces__content-text">
            <p>Открой доступ ко всей базе курсов за $
              9,99 / месяц</p>
            <button class="first-button">Подписка</button>
          </div>

          <img src="images/user-page/more-curses-img.svg" alt="more-curses">

        </div>
      </div>

      <div class="filter-wrapper">
        <h3 class="filter-wrapper__title">Курсы</h3>

        <a href="#0" class="filter filter-wrapper__link" data-filter="all" data-sort="default">Все курсы
        </a>
        <a href="#0" class="filter filter-wrapper__link" data-sort="time:desc">Новые </a>
        <a href="#0" class="filter filter-wrapper__link" data-sort="rating:desc"> Самые популярные</a>

        <div class="filter-wrapper__container">
          <?php while ($course = mysqli_fetch_assoc($db_data) ) {?>
          <div class="mix filter-wrapper__container-element" data-time="<?php echo $course['created_at']?>"
            data-rating="<?php echo $course['rating']?>">
            <div class="filter-wrapper__container-element--name">

              <img src="<?php echo $course['img']?>" alt="figma">

              <div class="filter-wrapper__container-element--name--title">
                <h6><?php echo $course['title']?></h6>
                <p>Автор: <?php echo $course['author']?></p>
              </div>
            </div>
            <div class=" filter-wrapper__container-element--content">
              <div class="filter-wrapper__container-element--content-time">

                <img src="images/user-page/time.svg" alt="time">

                <p><?php echo $course['time']?></p>
              </div>
              <div class="filter-wrapper__container-element--content-mark">
                <div>

                  <img src="images/user-page/mark.svg" alt="progress">

                  <p><?php echo $course['rating']?></p>
                </div>
                <!-- <button class="second-button">О курсе</button> -->
                <a class="btn btn--transparent second-button" href="about-course.php?id=<?php echo $course['id']?>">О
                  курсе</a>
              </div>
            </div>
          </div>
          <?}?>


    </section>
    
    <?}?>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/scripts.js">
  </script>
</body>

</html>
