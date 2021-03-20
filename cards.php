<?php 

session_start();
if (!empty($_SESSION['login']) && !empty($_SESSION['password'])) {
    
require_once('php/connect.php');
$db_data = mysqli_query($connect, 'SELECT * FROM `cards`');

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$db_userData = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
} else {
header('Location: index.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IT School">
  <link rel="shortcut icon" href="./images/user-page/logo.svg" type="img/svg">
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
       <div class="course__add">
        <a class="btn btn--primary" href="admin.php">Назад</a>
        </div>  
      <h2 class="course__container-title">Только факты</h2>
       

        <div class="course__wrap">
<?php while ($card = mysqli_fetch_assoc($db_data) ) {?>

          <div class="course__single">
            <div class="course__name course__name--cards">
              
              <div class="course__info">
                <h3 class="course__info-name course__info-name--cards"><?php echo $card['title']?></h3>
              </div>
              <div class="course__info">
                <span class="course__info-author"><?php echo $card['about']?></span>
              </div>
            </div>

            <div class="course__action-btn">
              <a class="btn btn--primary btn--primary-cards" href="editCard.php?id=<?php echo $card['id']?>">Изменить карточку</a>
            </div>
          </div>     
<?}?>
      </div>
      <!-- course start end-->
    </div>

  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/scripts.js">
  </script>
</body>

</html>
