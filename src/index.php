<?php

// Load data
include 'data/speakers.php';
include 'data/agenda.php';
include 'data/articles.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- SEO & Meta -->
  <title>YCM 10th Annual Summit • Distributed Economy</title>
  <meta name="description" content="Young Corporate Malaysians is proud to host Malaysia's first conference on Distributed Economy (DE). Come and join us to explore DE from the economic, legal, corporate and global perspective!">
  <meta name="image" content="https://summit.ycm.org.my/img/share-img.jpg">
  <meta name="og:title" content="YCM 10th Annual Summit • Distributed Economy">
  <meta name="og:description" content="Young Corporate Malaysians is proud to host Malaysia's first conference on Distributed Economy (DE). Come and join us to explore DE from the economic, legal, corporate and global perspective!">
  <meta name="og:image" content="https://summit.ycm.org.my/img/share-img.jpg">
  <meta name="og:url" content="https://summit.ycm.org.my/">
  <meta name="og:site_name" content="YCM 10th Annual Summit • Distributed Economy">
  <meta name="og:type" content="website">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<!-- Navigation -->
<header class="nav-bar" id="nav-bar">
  <div class="ycm-gradient-bar is-top" role="presentation"></div>
  <div class="nav-logos">
    <a href="http://www.ycm.org.my" rel="noreferrer noopener nofollow" target="_blank" class="nav-logos__ycm">
      <img src="img/logos/ycm-white.svg" class="ycm-logo-white" alt="Logo of YCM">
      <img src="img/logos/ycm-black.svg" class="ycm-logo-black" alt="Logo of YCM">
    </a>
    <a href="#" class="nav-logos__de" data-smooth-scroll>
      <img src="img/logos/de-masthead-black.svg" class="de-logo-black" alt="Logo of Distributed Economy">
    </a>
  </div>

  <!-- Mobile Fixed Menu -->
  <div class="nav-bar-mobile">
    <a href="#register" class="btn btn-primary" data-smooth-scroll>Apply Now</a>
    <button
      class="btn btn-light nav-hamburger"
      id="nav-hamburger"
      aria-label="Menu"
      aria-haspopup="true"
      aria-expanded="false"
      aria-controls="nav-mobile-menu"
    >
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
<nav class="nav-mobile-menu" id="nav-mobile-menu" aria-labelledby="">
  <a href="#about" class="nav-mobile-menu__item" data-smooth-scroll>About</a>
  <a href="#agenda" class="nav-mobile-menu__item" data-smooth-scroll>Agenda</a>
  <a href="#speakers" class="nav-mobile-menu__item" data-smooth-scroll>Speakers</a>
  <a href="#sponsors" class="nav-mobile-menu__item" data-smooth-scroll>Sponsors</a>
  <a href="#register" class="nav-mobile-menu__item is-cta" data-smooth-scroll>Apply Now</a>
</nav>

<main>

<!-- Hero -->
<section class="hero" id="hero">

  <div class="hero-pattern" aria-hidden="true">
    <div class="hero-pattern__image" role="presentation"></div>
  </div>

  <header class="hero-masthead">
    <h1 class="hero-masthead__logo">
      <img src="img/logos/de-masthead.svg" alt="Distributed Economy">
    </h1>
    <div class="hero-masthead__dateline">
      10th Annual YCM Summit<br>
      <time datetime="2018-11-17T08:30:00+08:00">Nov&nbsp;24&nbsp;2018</time>&ensp;&middot;&ensp;Aloft&nbsp;Kuala&nbsp;Lumpur&ensp;&middot;&ensp;8.30AM&nbsp;-&nbsp;5.00PM
    </div>
  </header>

  <footer class="hero-footer">
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
          <svg class="icon" aria-label="Scroll to next section">
            <use xlink:href="svg/sprites.svg#icon-chevron-down"></use>
          </svg>
        </a>
      </div>
      <div class="col-md-4" role="presentation"></div>
    </div>
  </footer>
</section>


<!-- About DE -->
<a class="anchor" id="about"></a>
<section class="about-de section">
  <div class="container">
    <article class="row align-items-center">

      <div class="col-md-6 col-lg-6 position-relative mb-5">
        <img class="about-de-pattern" src="img/pattern-01.png" role="presentation">
        <div class="about-de-body">
          <header class="section-header">
            <h2 class="section-title">About Distributed Economy</h2>
          </header>
          <p class="about-de-body__pullout">
            Distributed Economy explores the possibility of sustainable
            industrial development through a synergistic regional approach
            instead of large-scaled, centralised production that may be not be
            sustainable in the long-run.
          </p>
          <p>
            The distributed economy is made up of network of relationships that
            allows small and medium sized enterprises (SMEs) to advance through
            information technology. Where government policies and strategies
            have failed, a distributed economy in contrast, doesn’t rely on a
            central system to boost productivity. Rather, it opens the doors for
            all entities within the network regardless of size or location, to
            innovation and growth.
          </p>
          <p>

            With the emergence of technologies like blockchain, that allows free
            open-source information sharing, inclusive peer-2-peer sharing
            platforms and open access financial technolgies, the concept of a
            distributed economy is no longer a far fetched vision.
          </p>

          <figure class="de-diagram d-lg-none mt-4">
            <div class="de-diagram__item">
              <img src="img/de-diagram-01.svg" alt="">
              <span>Centralised</span>
            </div>
            <div class="de-diagram__item">
              <img src="img/de-diagram-02.svg" alt="">
              <span>Shared</span>
            </div>
            <div class="de-diagram__item">
              <img src="img/de-diagram-03.svg" alt="">
              <span>Distributed</span>
            </div>
          </figure>

        </div>
      </div>

      <aside class="col-md-5 offset-md-1 col-lg-4 offset-lg-2 mb-4 mb-md-0">
        <header class="section-header">
          <h3 class="section-title">Key Areas</h3>
        </header>
        <ul class="about-de-areas">
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-briefcase"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Employment &amp; Job Creation
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-cubes"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Blockchain &amp; Open Financial Technologies
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-upwards"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Inequality: Progress for Everyone
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="svg/sprites.svg#icon-government"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Regulating the Platform Economy
            </span>
          </li>
        </ul>
      </aside>

    </article>
  </div>

  <!-- Diagram -->
  <div class="container">
    <figure class="de-diagram d-none d-lg-flex">
      <div class="de-diagram__item">
        <img src="img/de-diagram-01.svg" alt="">
        <span>Centralised</span>
      </div>
      <div class="de-diagram__item">
        <img src="img/de-diagram-02.svg" alt="">
        <span>Shared</span>
      </div>
      <div class="de-diagram__item">
        <img src="img/de-diagram-03.svg" alt="">
        <span>Distributed</span>
      </div>
    </figure>
  </div>
</section>


<!-- Agenda Section -->
<a class="anchor is-offset" id="agenda"></a>
<section class="agenda-section">
  <div class="container">
    <div class="agenda-container">

      <!-- Header -->
      <header class="section-header">
        <h2 class="section-title">Agenda</h2>
      </header>

      <!-- Agenda Listings -->
      <ul class="agenda-item-list row align-items-stretch">
        <?php foreach ($agenda as $index => $item): ?>
        <li class="col-md-6 mb-3">
          <div
            id="agenda-item-<?php echo $index+1 ?>"
            class="agenda-item"
            data-toggle="modal"
            data-target="#agenda-modal-<?php echo $index+1 ?>"
            role="button"
            tabindex="0"
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
          </div>
        </li>
        <?php endforeach; ?>
      </ul>

      <!-- Disclaimer -->
      <div class="alert alert-warning" role="alert">
        <small><em>We're in the midst of finalising our agenda. Kindly note that this list is subject to change.</em></small>
      </div>

    </div>
  </div>
</section>


<!-- Agenda Modals -->
<?php foreach ($agenda as $index => $item): ?>
<article class="modal fade" tabindex="-1" role="dialog" id="agenda-modal-<?php echo $index+1 ?>" aria-labelledby="agenda-item-<?php echo $index+1 ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="agenda-modal modal-dark modal-content">
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
<a class="anchor is-offset" id="speakers"></a>
<section class="speakers-section section">
  <div class="container">
    <header class="section-header">
      <h2 class="section-title">Speakers</h2>
    </header>
  </div>

  <div class="container">

    <div class="alert alert-warning" role="alert">
      <small>
        <em>
          Watch this space! We're in the midst of confirming our list of
          speakers, which may lead to changes in our line-up.
        </em>
      </small>
    </div>

    <!-- Speakers List -->
    <ul class="speakers-item-list row">
      <?php foreach ($speakers as $index => $speaker): ?>
      <li class="col-6 col-md-4 col-lg-3">
        <button
          class="speakers-item"
          id="speaker-item-<?php echo $speaker['id'] ?>"
          data-toggle="modal"
          data-target="#speaker-modal-<?php echo $speaker['id'] ?>"
        >
          <div class="speakers-item__profile">
            <img src="<?php echo $speaker['img'] ?>" alt="Photo of <?php echo $speaker['name'] ?>">
            <div class="speakers-item__logo">
              <img src="<?php echo $speaker['logo'] ?>" alt="Logo of <?php echo $speaker['company'] ?>">
            </div>
            <svg class="speakers-item__open-icon icon" aria-hidden="true">
              <use xlink:href="svg/sprites.svg#icon-arrow-right"></use>
            </svg>
          </div>
          <p class="speakers-item__details">
            <strong><?php echo $speaker['name'] ?></strong><br>
            <small>
              <?php echo $speaker['title'] ?><br>
              <em><?php echo $speaker['company'] ?></em>
            </small>
          </p>
        </button>
      </li>
      <?php endforeach ;?>
    </ul>
  </div>

</section>


<!-- Speakers Modals -->
<?php foreach ($speakers as $index => $item): ?>
<article class="modal fade" tabindex="-1" role="dialog" id="speaker-modal-<?php echo $item['id'] ?>" aria-labelledby="speaker-item-<?php echo $item['id'] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="speakers-modal modal-dark modal-content">
      <div class="modal-header">
        <header>
          <h1><?php echo $item['name'] ?></h1>
          <?php echo $item['title'] ?><br>
          <?php echo $item['company'] ?>
        </header>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($item['description'] as $content): ?>
          <p><?php echo $content ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</article>
<?php endforeach; ?>


<!-- Article Section -->
<a class="anchor is-offset" id="articles"></a>
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
      <svg class="icon" aria-label="Previous">
        <use xlink:href="svg/sprites.svg#icon-arrow-left"></use>
      </svg>
    </button>

    <!-- Carousel -->
    <div class="article-item-list" id="article-item-list">

      <?php foreach ($articles as $item): ?>
        <a href="<?php echo $item['link'] ?>" target="_blank" rel="noopener nofollow noreferrer" class="article-item">
          <div class="article-item__image" aria-hidden="true">
            <img src="<?php echo $item['image'] ?>" alt="Cover photo for <?php echo $item['title'] ?>">
          </div>
          <div class="article-item__details">
            <time><?php echo date_format($item['date'], "M j, Y") ?></time>
            <span class="article-item__title">
              <?php echo $item['title']; ?>
            </span>
            <ul class="article-item__tags">
              <?php foreach ($item['tags'] as $tag): ?>
                <li><?php echo $tag ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Next Button -->
    <button class="article-item-control is-next">
      <svg class="icon" aria-label="Next">
        <use xlink:href="svg/sprites.svg#icon-arrow-right"></use>
      </svg>
    </button>

  </div>
</section>


<!-- Sponsors Section -->
<a class="anchor is-offset" id="sponsors"></a>
<section class="sponsors-section section with-offset-bottom">
  <div class="container">
    <h2 class="section-title">Platinum Sponsors</h2>
    <ul class="sponsor-item-list">
      <li>
        <a href="https://www.pwc.com/my/en.html" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer">
          <div class="sponsor-item__logo">
            <img src="img/logos/pwc.png" srcset="img/logos/pwc@2x.png" alt="Logo of PwC">
          </div>
          <p class="sponsor-item__name">PwC Malaysia</p>
        </a>
      </li>
      <li>
        <a href="https://www.cimb.com/en/index.html" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer">
          <div class="sponsor-item__logo">
            <img src="img/logos/cimb.png" srcset="img/logos/cimb@2x.png" alt="Logo of CIMB">
          </div>
          <p class="sponsor-item__name">CIMB</p>
        </a>
      </li>
      <li>
        <a href="https://www.brunsfield.com/" target="_blank" rel="noopener nofollow noreferrer" class="sponsor-item">
          <div class="sponsor-item__logo">
            <img src="img/logos/brunsfield.png" srcset="img/logos/brunsfield@2x.png" alt="Logo of Brunsfield">
          </div>
          <p class="sponsor-item__name">Brunsfield</p>
        </a>
      </li>
    </ul>
  </div>

  <div class="container">
    <h2 class="section-title">Silver Sponsor</h2>
    <ul class="sponsor-item-list">
      <li>
        <a href="https://axiatafoundation.com/" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer">
          <div class="sponsor-item__logo">
            <img src="img/logos/axiata.png" srcset="img/logos/axiata@2x.png" alt="Logo of Axiata Foundation">
          </div>
          <p class="sponsor-item__name">Axiata Foundation</p>
        </a>
      </li>
    </ul>
  </div>

  <div class="container">
    <h2 class="section-title">Career Partner</h2>
    <ul class="sponsor-item-list">
      <li>
        <a href="https://graduan.com/" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer">
          <div class="sponsor-item__logo">
            <img src="img/logos/graduan.png" srcset="img/logos/graduan@2x.png" alt="Logo of Graduan">
          </div>
          <p class="sponsor-item__name">Graduan</p>
        </a>
      </li>
    </ul>
  </div>
</section>


<!-- Registration Form -->
<section class="registration-form-section">
  <a class="anchor is-offset" id="register"></a>
  <div class="container">

    <div class="registration-form-panel">
      <h2 class="section-title">Apply Now</h2>
      <div class="row">

        <!-- Instructions -->
        <div class="col-lg-6 offset-lg-1 order-lg-2 mb-5 mb-lg-0">
          <div class="registration-instructions">
            <p class="registration-instructions__pullout">
              Apply now to be a part of Malaysia’s first conference on Distributed Economy!
            </p>
            <ol class="registration-steps">
              <li>
                <span class="registration-steps__label">Step 1</span>
                <p>Apply to attend as a delegate by 24th October 2018!</p>
              </li>
              <li>
                <span class="registration-steps__label">Step 2</span>
                <p>We will inform you whether you are shortlisted within 2&ndash;3 weeks from the application deadline.</p>
              </li>
              <li>
                <span class="registration-steps__label">Step 3</span>
                <p>RSVP your attendance &mdash; and we'll see you at the Summit!</p>
              </li>
            </ol>
          </div>
        </div>

        <!-- Form -->
        <div class="col-lg-5 order-lg-1">
          <form id="registration-form" action="/api/register.php" method="POST" class="registration-form">
            <div class="form-group mb-5">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control w-100">
              <span class="error-label" for="name"></span>
            </div>
            <div class="form-group mb-5">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control w-100">
              <span class="error-label" for="email"></span>
            </div>
            <div class="form-group mb-5">
              <label for="contactno">Contact Number</label>
              <input type="text" name="contactno" id="contactno" class="form-control w-100">
              <span class="error-label" for="contactno"></span>
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
              <li><a href="http://www.ycm.org.my" rel="noreferrer noopener nofollow" target="_blank">About YCM</a></li>
            </ul>
          </div>

          <!-- Social Links -->
          <div class="col-md-6">
            <ul class="footer-links">
              <li><a href="https://www.facebook.com/YoungCorpMsians" rel="noreferrer noopener nofollow">Facebook</a></li>
              <li><a href="https://www.instagram.com/youngcorpmsians" rel="noreferrer noopener nofollow">Instagram</a></li>
              <li><a href="https://www.linkedin.com/company/young-corporate-malaysians/" rel="noreferrer noopener nofollow">LinkedIn</a></li>
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
