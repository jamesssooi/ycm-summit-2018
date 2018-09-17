<?php

// Load data
include 'data/speakers.php';
include 'data/agenda.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- SEO & Meta -->
  <title>Distributed Economy • YCM 10th Annual Summit</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<!-- Navigation -->
<header class="nav-bar" id="nav-bar">
  <div class="ycm-gradient-bar is-top" role="presentation"></div>
  <div class="nav-logos">
    <a href="http://www.ycm.org.my" target="_blank" class="nav-logos__ycm">
      <img src="img/logos/ycm-white.svg" class="ycm-logo-white" alt="Logo of YCM">
      <img src="img/logos/ycm-black.svg" class="ycm-logo-black" alt="Logo of YCM">
    </a>
    <a href="#" class="nav-logos__de" data-smooth-scroll>
      <img src="img/logos/de-masthead-black.svg" class="de-logo-black" alt="Logo of Distributed Economy">
    </a>
  </div>

  <!-- Mobile Fixed Menu -->
  <div class="nav-bar-mobile">
    <a href="#" class="btn btn-primary">Register</a>
    <button class="btn btn-light nav-hamburger" id="nav-hamburger">
      <svg class="icon" width="32px" height="32px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
        <rect x="6" y="10" width="20" height="2"></rect>
        <rect x="6" y="16" width="20" height="2"></rect>
        <rect x="6" y="22" width="20" height="2"></rect>
      </svg>
    </button>
  </div>

  <!-- Desktop Menu -->
  <nav class="nav-menu ml-auto">
    <a href="#about" class="nav-menu__item" data-smooth-scroll>About</a>
    <a href="#agenda" class="nav-menu__item" data-smooth-scroll>Agenda</a>
    <a href="#speakers" class="nav-menu__item" data-smooth-scroll>Speakers</a>
    <a href="#sponsors" class="nav-menu__item" data-smooth-scroll>Sponsors</a>
    <a href="#register" class="nav-menu__item is-cta" data-smooth-scroll>Apply Now</a>
  </nav>
</header>

<!-- Mobile Menu -->
<nav class="nav-mobile-menu" id="nav-mobile-menu">
  <a href="#about" class="nav-mobile-menu__item" data-smooth-scroll>About</a>
  <a href="#agenda" class="nav-mobile-menu__item" data-smooth-scroll>Agenda</a>
  <a href="#speakers" class="nav-mobile-menu__item" data-smooth-scroll>Speakers</a>
  <a href="#sponsors" class="nav-mobile-menu__item" data-smooth-scroll>Sponsors</a>
  <a href="#register" class="nav-mobile-menu__item is-cta" data-smooth-scroll>Apply Now</a>
</nav>

<main>

<!-- Hero -->
<section class="hero" id="hero">

  <div class="hero-pattern">
    <div class="hero-pattern__image"></div>
  </div>

  <div class="hero-masthead">
    <h1 class="hero-masthead__logo">
      <img src="img/logos/de-masthead.svg" alt="Distributed Economy">
    </h1>
    <div class="hero-masthead__dateline">
      10th Annual YCM Summit<br>
      <time datetime="2018-11-17T08:30:00+08:00">Nov 24 2018</time>&ensp;&middot;&ensp;Aloft Kuala Lumpur&ensp;&middot;&ensp;8.30AM&nbsp;-&nbsp;5PM
    </div>
  </div>

  <div class="hero-footer">
    <div class="row align-items-end">
      <div class="col-md-4 text-center text-lg-left mb-4 mb-lg-0">
        <img
          src="img/logos/ycm-10th-anniversary.png"
          srcset="img/logos/ycm-10th-anniversary@2x.png 2x"
          alt="YCM 10th Anniversary"
        >
      </div>
      <div class="col-md-4 text-center">
        <a href="#register" class="btn btn-primary with-shadow mb-4" data-smooth-scroll>Apply Now</a>
        <a href="#about" class="hero-footer__chevron" data-smooth-scroll>
          <svg class="icon">
            <use xlink:href="svg/sprites.svg#icon-chevron-down"></use>
          </svg>
        </a>
      </div>
      <div class="col-md-4" role="presentation"></div>
    </div>
  </div>
</section>


<!-- About DE -->
<section class="about-de section" id="about">
  <div class="container">
    <article class="row align-items-center">

      <div class="col-md-6 position-relative mb-5">
        <img class="about-de-pattern" src="img/pattern-01.png" role="presentation">
        <div class="about-de-body">
          <header class="section-header">
            <h2 class="section-title">About Distributed Economy</h2>
          </header>
          <p class="about-de-body__pullout">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed
            consectetur nibh.
          </p>
          <p>
            Aenean eget urna ac ante feugiat lobortis id in augue. In et risus
            lacinia augue aliquam eleifend. Nunc vulputate euismod mi a fermentum.
            In rhoncus arcu elementum, lobortis lacus et, faucibus nisl. Phasellus
            quis nisl egestas, aliquet risus in, varius orci. Aliquam tincidunt
            lorem leo. Praesent facilisis mi urna, id iaculis lorem porttitor at. 
          </p>
        </div>
      </div>

      <div class="col-md-4 offset-md-2">
        <header class="section-header">
          <h3 class="section-title">Areas of Interest</h3>
        </header>
        <ul class="about-de-areas">
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-chevron-down"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Blockchain
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-chevron-down"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Regulatory Bodies
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-chevron-down"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Government
            </span>
          </li>
        </ul>
      </div>

    </article>
  </div>
</section>


<!-- Article Section -->
<section class="article-section section" id="articles">
  <div class="container">
    <header class="section-header">
      <h2 class="section-title">Curated Articles</h2>
    </header>
  </div>

  <!-- Article Listings -->
  <div class="container position-relative">

    <!-- Prev Button -->
    <button class="article-item-control is-prev">
      <svg class="icon">
        <use xlink:href="svg/sprites.svg#icon-arrow-left"></use>
      </svg>
    </button>

    <!-- Carousel -->
    <div class="article-item-list" id="article-item-list">
      <?php for ($i = 0; $i < 9; $i++): ?>
      <div class="article-item">
        <div class="article-item__image">
          <img src="https://unsplash.it/380/210" alt="">
        </div>
        <div class="article-item__details">
          <time>Aug 9 2018</time>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          </p>
        </div>
      </div>
      <?php endfor ?>
    </div>

    <!-- Next Button -->
    <button class="article-item-control is-next">
      <svg class="icon">
        <use xlink:href="svg/sprites.svg#icon-arrow-right"></use>
      </svg>
    </button>

  </div>
</section>


<!-- Agenda Section -->
<section class="agenda-section" id="agenda">
  <div class="container">
    <div class="agenda-container">

      <!-- Header -->
      <header class="section-header">
        <h2 class="section-title">Agenda</h2>
      </header>

      <!-- Agenda Listings -->
      <ul class="agenda-item-list row">
        <?php foreach ($agenda as $index => $item): ?>
        <li class="col-md-6">
          <button
            id="agenda-item-<?php echo $index+1 ?>"
            class="agenda-item"
            data-toggle="modal"
            data-target="#agenda-modal-<?php echo $index+1 ?>"
          >
            <div class="agenda-item__header">
              <span class="agenda-item__type"><?php echo $item['type'] ?></span>
              <p class="agenda-item__title">
                <?php echo $item['title'] ?>
              </p>
            </div>
            <div class="agenda-item__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-arrow-right"></use>
              </svg>
            </div>
          </button>
        </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</section>

<!-- Agenda Modals -->
<?php foreach ($agenda as $index => $item): ?>
<article class="modal fade" tabindex="-1" role="dialog" id="agenda-modal-<?php echo $index+1 ?>" aria-labelledby="agenda-item-<?php echo $index+1 ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="agenda-modal modal-content">
      <div class="modal-header">
        <header>
          <span class="agenda-modal__type"><?php echo $item['type'] ?></span>
          <h1><?php echo $item['title'] ?></h1>
        </header>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $item['description'] ?>
      </div>
    </div>
  </div>
</article>
<?php endforeach; ?>

<!-- Speakers Section -->
<section class="speakers-section section" id="speakers">
  <div class="container">
    <header class="section-header">
      <h2 class="section-title">Speakers</h2>
    </header>
  </div>

  <div class="container">
    <div class="row">

      <!-- Speakers List -->
      <div class="col-md-7">
        <ul class="speakers-item-list row">
          <?php foreach ($speakers as $speaker): ?>
          <li class="col-6 col-lg-4">
            <button class="speakers-item" id="<?php echo $speaker['id'] ?>" data-target="#<?php echo $speaker['id'] ?>-info">
              <div class="speakers-item__profile">
                <img src="https://unsplash.it/240/240" alt="Photo of X">
                <div class="speakers-item__logo">
                  <img src="https://unsplash.it/72/72" alt="Logo of X">
                </div>
              </div>
              <p class="speakers-item__details">
                <strong><?php echo $speaker['name'] ?></strong><br>
                <small>
                  <?php echo $speaker['title'] ?><br>
                  <?php echo $speaker['company'] ?>
                </small>
              </p>
            </button>
          </li>
          <?php endforeach ;?>
        </ul>
      </div>

      <!-- Speakers Info -->
      <div class="col-5 d-none d-md-block">
        <div class="speakers-info" id="speakers-info">
          <?php foreach ($speakers as $speaker): ?>
          <article id="<?php echo $speaker['id'] ?>-info" class="speakers-info-content">
            <header>
              <strong><?php echo $speaker['name'] ?></strong><br>
              <?php echo $speaker['title'] ?><br>
              <?php echo $speaker['company'] ?>
            </header>
            <?php echo $speaker['description'] ?>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Sponsors Section -->
<section class="sponsors-section section with-offset-bottom" id="sponsors">
  <div class="container">
    <h2 class="section-title">Platinum Sponsors</h2>
    <ul class="sponsor-item-list">
      <li>
        <div class="sponsor-item">
          <div class="sponsor-item__logo">
            <img src="https://unsplash.it/210/210" alt="Logo of X">
          </div>
          <p class="sponsor-item__name">ACME Inc</p>
        </div>
      </li>
    </ul>
  </div>

  <div class="container">
    <h2 class="section-title">Silver Sponsors</h2>
    <ul class="sponsor-item-list">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <li>
        <div class="sponsor-item">
          <div class="sponsor-item__logo">
            <img src="https://unsplash.it/210/210" alt="Logo of X">
          </div>
          <p class="sponsor-item__name">ACME Inc</p>
        </div>
      </li>
      <?php endfor; ?>
    </ul>
  </div>
</section>


<!-- Registration Form -->
<section class="registration-form-section" id="register">
  <div class="container">

    <div class="registration-form-panel">
      <h2 class="section-title">Apply Now</h2>
      <div class="row">

        <!-- Instructions -->
        <div class="col-lg-6 offset-lg-1 order-lg-2 mb-5 mb-lg-0">
          <div class="registration-instructions">
            <p class="registration-instructions__pullout">
              Lorem ipsum pitch and selling point here. Free? Exclusive?
              Networking Opportunities?
            </p>
            <ol class="registration-steps">
              <li>
                <span class="registration-steps__label">Step 1</span>
                <p>Register your interest</p>
              </li>
              <li>
                <span class="registration-steps__label">Step 2</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
              </li>
              <li>
                <span class="registration-steps__label">Step 3</span>
                <p>If you are approved, we will send you further instructions!</p>
              </li>
            </ol>
          </div>
        </div>

        <!-- Form -->
        <div class="col-lg-5 order-lg-1">
          <form action="/api/register.php" method="POST" class="registration-form">
            <div class="form-group mb-5">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control w-100">
            </div>
            <div class="form-group mb-5">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control w-100">
            </div>
            <div class="form-group mb-5">
              <label for="contactno">Contact Number</label>
              <input type="text" name="contactno" class="form-control w-100">
            </div>
            <div class="mb-1">
              <button class="btn btn-primary">
                Continue
                <svg class="icon">
                  <use xlink:href="svg/sprites.svg#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
            <small>You will continue your registration in Google Forms</small>
          </form>
        </div>

      </div>
    </div>

  </div>
</section>

</main>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row text-center text-md-left">

      <!-- Left Column -->
      <div class="col-md-8 mb-5 mb-md-0">
        <a href="#" class="footer__logo mb-4" data-smooth-scroll>
          <img src="img/logos/ycm-white.svg" alt="Logo of YCM">
        </a>
        <small class="footer__disclaimer">Copyright (C) 2018 Young Corporate Malaysians</small>
      </div>

      <!-- Right Column -->
      <div class="col-md-4">
        <div class="row">

          <!-- Links -->
          <div class="col-md-6 mb-4 mb-md-0">
            <ul class="footer-links">
              <li><a href="#about" data-smooth-scroll>About</a></li>
              <li><a href="#agenda" data-smooth-scroll>Agenda</a></li>
              <li><a href="#speakers" data-smooth-scroll>Speakers</a></li>
              <li><a href="#sponsors" data-smooth-scroll>Sponsors</a></li>
              <li><a href="#register" data-smooth-scroll>Register</a></li>
              <li><a href="http://ycm.org.my" target="_blank">About YCM</a></li>
            </ul>
          </div>

          <!-- Social Links -->
          <div class="col-md-6">
            <ul class="footer-links">
              <li><a href="https://www.facebook.com/YoungCorpMsians">Facebook</a></li>
              <li><a href="https://www.instagram.com/youngcorpmsians">Instagram</a></li>
              <li><a href="https://www.linkedin.com/company/young-corporate-malaysians/">LinkedIn</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./js/app.js" charset="utf-8"></script>

</body>
</html>
