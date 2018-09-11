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
<header class="nav-bar">
  <div class="ycm-gradient-bar is-top" role="presentation"></div>
  <div class="nav-logos">
    <a href="#">
      <img src="img/logos/ycm-white.svg" alt="Logo of YCM">
    </a>
  </div>
  <nav class="nav-menu ml-auto">
    <a href="#" class="nav-menu__item">About</a>
    <a href="#" class="nav-menu__item">Agenda</a>
    <a href="#" class="nav-menu__item">Speakers</a>
    <a href="#" class="nav-menu__item">Sponsors</a>
    <a href="#" class="nav-menu__item">Register</a>
  </nav>
</header>

<!-- Hero -->
<section class="hero">

  <div class="hero-pattern">
    <div class="hero-pattern__image"></div>
  </div>

  <div class="hero-masthead">
    <h1 class="hero-masthead__logo">
      <img src="img/logos/de-masthead.svg" alt="Distributed Economy">
    </h1>
    <div class="hero-masthead__dateline">
      10th Annual YCM Summit<br>
      <time datetime="2018-11-17">Nov 17 2018</time>&ensp;&middot;&ensp;Aloft Kuala Lumpur
    </div>
  </div>

  <div class="hero-footer">
    <div class="row align-items-end">
      <div class="col-4">
        <img
          src="img/logos/ycm-10th-anniversary.png"
          srcset="img/logos/ycm-10th-anniversary@2x.png 2x"
          alt="YCM 10th Anniversary"
        >
      </div>
      <div class="col-4 text-center">
        <a href="#" class="btn btn-primary with-shadow mb-4">Register Now</a>
        <button class="hero-footer__chevron">
          <svg class="icon">
            <use xlink:href="svg/sprites.svg#icon-chevron-down"></use>
          </svg>
        </button>
      </div>
      <div class="col-4" role="presentation"></div>
    </div>
  </div>
</section>


<!-- About DE -->
<section class="about-de section">
  <div class="container">
    <article class="row align-items-center">

      <div class="col-6 position-relative">
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

      <div class="col-4 offset-2">
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
<section class="article-section section">
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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./js/app.js" charset="utf-8"></script>

</body>
</html>
