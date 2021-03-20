<?php 

require_once('php/connect.php');
$db_data = mysqli_query($connect, 'SELECT * FROM `cards`');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>IT School</title>
  <link rel="shortcut icon" href="./images/user-page/logo.svg" type="img/svg">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <header class="header">
    <div class="container header__container">
      <div class="header__wrapper">
        <div class="menu__nav">
          <a href="#" class="header__logo"><img src="images/logo.svg" alt="Logo" class="logo__img" /></a>
          <nav class="header__menu">
            <a href="#" class="header__menu-link current">Главная</a>
            <a href="#" class="header__menu-link">Курсы</a>
            <a href="#" class="header__menu-link">Прайс</a>
            <a href="#" class="header__menu-link">О нас</a>
          </nav>
        </div>
        <div class="toolbar">
          <!-- Разметка переключателя темы -->
          <div class="theme-switch">
            <svg class="theme-switch__icon icon-sun" role="img" aria-label="Иконка солнца">
              <use href="./images/sprite.svg#sun"></use>
            </svg>

            <div class="theme-switch__control">
              <input class="theme-switch__toggle" type="checkbox" name="theme" id="theme-switch-toggle"
                aria-label="Переключить между тёмной и светлой темой" />
              <label aria-hidden="true" class="theme-switch__track" for="theme-switch-toggle">
              </label>
              <div aria-hidden="true" class="theme-switch__marker"></div>
            </div>

            <svg class="theme-switch__icon icon-moon" aria-label="Иконка луны">
              <use href="./images/sprite.svg#moon"></use>
            </svg>
          </div>
        </div>
        <!-- <button class=""> -->
        <div class="modal-btn">
          <a class="header__btn button button--primary cd-signin" href="#0">Личный кабинет</a>
        <!-- </button> -->
        </div>
      </div>
    </div>
  </header>

  <section class="section hero-section">
    <div class="container hero-section__container">
      <div class="hero__content">
        <h1 class="section-title hero-title">Только качественные курсы</h1>
        <p class="section-text hero-text">
          На нашем сайте собраны лучшие курсы на разные темы. Курсы
          программирования, продвижения, SMM, языковые курсы. Это малая часть
          того, что есть в нашей базе
        </p>
      </div>
    </div>
  </section>

  <section class="section about-section">
    <div class="container about-section__container">
      <div class="about-wrapper">
        <img src="images/clouds1.png" alt="1 Picture" class="picture1" />
        <div class="about-content">
          <h3 class="section-description about-desc animate__animated animate__backInRight animate__delay-2s" data-scroll>О нас</h3>
          <h2 class="section-title about-title animate__animated animate__fadeInDown animate__delay-2s" data-scroll>Только факты</h2>
          <ul class="features__list enumeration">

            <?php while ($card = mysqli_fetch_assoc($db_data) ) {?>
            <li class="card-item">
              <div class="card-img">
                <img src="<?php echo $card['img']?>" alt="1 Icon" class="card-icon" />
              </div>
              <h3 class="card-title"><?php echo $card['title']?></h3>
              <p class="card-text"><?php echo $card['about']?></p>
            </li>
            <?}?>
          </ul>
          <div class="buttons">
            <a class="button button--primary button--padding">Больше фактов</a>
            <p class="footer-text">или</p>
            <div class="modal-btn">
            <a class="button button--secondary2 button--padding cd-signup">Присоединиться</a>
            </div>
          </div>
        </div>
        <img src="images/clouds2.png" alt="2 Picture" class="picture2" />
      </div>
    </div>
  </section>
  <section class="section stats-section">
    <div class="container stats-section__container">
      <div class="stats-wrapper">
        <div class="left-part animate__animated animate__backInLeft animate__delay-2s" data-scroll>
          <div class="stats__card">
            <img src="images/clock.svg" alt="Stats Picture1" class="stats-img" />
            <p class="stats-numbers">97%</p>
            <p class="stats-text">Успешно пройденных курсов</p>
          </div>
        </div>
        <div class="right-part animate__animated animate__backInRight animate__delay-3s" data-scroll>
          <div class="stats__card even">
            <img src="images/group.svg" alt="Stats Picture1" class="stats-img" />
            <p class="stats-numbers">250</p>
            <p class="stats-text">Преподавателей</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section feedback-section">
    <div class="container feedbacks-section__container">
        <div class="swiper-container">
              <div class="swiper__description">
                <span class="section-description">Отзывы</span>
                <h2 class="slider__title section-title">Что говорят студенты</h2>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent1.jpg" alt="Student1" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent2_.jpg" alt="Student2" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent3_.jpg" alt="Student3" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent1.jpg" alt="Student1" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent2_.jpg" alt="Student2" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent3_.jpg" alt="Student3" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent1.jpg" alt="Student1" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent2_.jpg" alt="Student2" />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__card">
                    <p class="card__text">
                      Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam.
                      Eu usu vidit tractatos, vero tractatos ius an, in mel diceret
                      persecuti.
                    </p>
                    <div class="card__picture">
                      <img class="card__img" src="images/stydent3_.jpg" alt="Student3" />
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </section>
  <section class="section faq-section">
    <div class="container faq-section__container">
      <div class="faq-wrapper">
        <span class="section-description faq-desc">Faq</span>
        <h2 class="section-title faq-title">Список популярных вопросов</h2>
        <div class="item">
          <input type="radio" name="items" class="item-check" />
          <label for="item1" class="item-title">Вопрос номер 1</label>
          <p class="item-text">
            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu
            usu vidit tractatos, vero tractatos ius an, in mel diceret
            persecuti.
          </p>
        </div>
        <div class="item">
          <input type="radio" name="items" class="item-check" />
          <label for="item2" class="item-title">Вопрос номер 2</label>
          <p class="item-text">
            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu
            usu vidit tractatos, vero tractatos ius an, in mel diceret
            persecuti.
          </p>
        </div>
        <div class="item">
          <input type="radio" name="items" class="item-check" />
          <label for="item3" class="item-title">Вопрос номер 3</label>
          <p class="item-text">
            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu
            usu vidit tractatos, vero tractatos ius an, in mel diceret
            persecuti.
          </p>
        </div>
        <div class="item">
          <input type="radio" name="items" class="item-check" />
          <label for="item4" class="item-title">Вопрос номер 4</label>
          <p class="item-text">
            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu
            usu vidit tractatos, vero tractatos ius an, in mel diceret
            persecuti.
          </p>
        </div>
        <div class="item">
          <input type="radio" name="items" class="item-check" />
          <label for="item5" class="item-title">Вопрос номер 5</label>
          <p class="item-text">
            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu
            usu vidit tractatos, vero tractatos ius an, in mel diceret
            persecuti.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="callback">
        <div class="callback-container animate__animated animate__fadeInDown animate__delay-2s" data-scroll>
            <div class="callback-header">
                <h2>Свяжись с нами</h2>
            </div>
            <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
            <form  class="validate" method="POST" target="hiddenFrame" action="php/mail-callback.php">
                <div class="form-control">
                    <label for="username">Ваше имя</label>
                    <input type="text" placeholder="Андрей" 
                    id="username" 
                    name="username" 
                    minLength="2"
                    maxLength="25"
                    pattern = "^[а-яёА-ЯЁ]+$" 
                    title="Не коректное имя, имя должно написано кирилицей"
                    required/>
                    <span class="count-username"></span>
                </div>
                <div class="form-control">
                    <label for="username">Ваш email</label>
                    <input  type="email" placeholder="user@gmail.com" 
                    id="email" 
                    name="email"
                    pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@(gmail\.com|ukr\.net|mail\.ru)+$" 
                    title="Не коректний email допускаетсься только @gmail.com, @mail.ru, @ukr.net'"
                    required/>
                    <span class="count-email"></span>
                </div>
                <div class="form-control">
                    <label for="username">Ваш телефон</label>
                    <input type="tel" 
                    placeholder="+380960000000" 
                    id="phone" 
                    name="phone"
                    pattern="((\+)?\b(8|38)?(0[\d]{2}))([\d-]{5,8})([\d]{2})" 
                    title="Не коректний телефон прим. +380680000000"
                    required/>
                    <span class="count-phone"></span>
                </div>
                <button class="button form-callback--btn button--secondary2" type="submit">Отправить</button>
            </form>
        </div>

    </section>
  <section class="section price-section">
    <div class="container price-section__container">
      <div class="price__content">
        <h1 class="section-title price-title">Самые вкусные тарифы</h1>
        <p class="section-text price-text">
          Предлагаем вам ознакомиться со списком тарифных планов
        </p>
        <button class="button button--price">Перейти к тарифам</button>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container footer__container">
      <div class="footer__wrapper">
        <div class="menu__nav">
          <a href="#" class="footer__logo"><img src="images/logo.svg" alt="Logo" class="logo__img" /></a>
          <nav class="footer__menu">
            <a href="#" class="header__menu-link current">Главная</a>
            <a href="#" class="header__menu-link">Курсы</a>
            <a href="#" class="header__menu-link">Прайс</a>
            <a href="#" class="header__menu-link">О нас</a>
          </nav>
        </div>
        <!-- <button class="footer__btn button button--secondary modal-btn"> -->
        <div class="footer__btn modal-btn">
          <a class="button button--secondary modal-btn cd-signin" href="#0">Личный кабинет</a>
        </div>
        <!-- </button> -->
      </div>
      <p class="text-footer">Copyright © 2021 by Team3</p>
    </div>
  </footer>

  <div class="cd-user-modal">
    <div class="cd-user-modal-container">
      <ul class="cd-switcher">
        <li><a href="#0">Войти</a></li>
        <li><a href="#0">Регистрация</a></li>
      </ul>
      <div id="cd-login">
        <form class="cd-form" action="php/login.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-login" for="signin-login">Логин</label>
            <input class="fieldset-input" id="signin-login" name="login" type="text" placeholder="Логин" required />
          </p>
          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Пароль</label>
            <input class="fieldset-input" id="signin-password" name="password" type="password" placeholder="Пароль"
              required />
            <a href="#0" class="hide-password">Hide</a>
          </p>
          <p class="fieldset">
            <input class="button cd-form__button button--secondary2  dark-theme--btn" type="submit" value="Войти" />
          </p>
        </form>
      </div>

      <div id="cd-signup">
        <form class="cd-form" action="php/registration.php" method="POST">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Имя</label>
            <input class="fieldset-input" id="signup-username" name="name" type="text" placeholder="Имя" required />
          </p>

          <p class="fieldset">
            <label class="image-replace cd-login" for="signup-login">Логин</label>
            <input class="fieldset-input" id="signup-login" name="login" type="text" placeholder="Логин" required />
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="fieldset-input" id="signup-email" name="email" type="email" placeholder="E-mail" required />
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Пароль</label>
            <input class="fieldset-input" name="password" id="signup-password" type="password" placeholder="Пароль"
              required />
            <a href="#0" class="hide-password">Hide</a>
          </p>

          <p class="fieldset">
            <input class="button cd-form__button button--secondary2 dark-theme--btn" type="submit" value="Создать аккаунт" />
          </p>
        </form>
      </div>
      <a href="#0" class="cd-close-form">х</a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- inject:js -->
  <script src="js/scripts.js"></script>
  <!-- endinject -->
</body>

</html>
