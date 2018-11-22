<?php

// Load data
include 'data/speakers.php';
include 'data/agenda.php';
include 'data/articles.php';

$speakersQuery = new WP_Query([
  'post_type' => 'speaker',
  'posts_per_page' => -1
]);

$agendaQuery = new WP_Query([
  'post_type' => 'agenda',
  'posts_per_page' => -1,
  'order' => 'ASC'
]);

$theme_dir = get_stylesheet_directory_uri();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126260641-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-126260641-1');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- SEO & Meta -->
  <title>YCM 10th Annual Summit 2018 • Distributed Economy</title>
  <meta name="description" content="YCM (Young Corporate Malaysians) will be hosting its 10th Annual Summit 2018 on Distributed Economy! Join us on 24th November 2018 in Kuala Lumpur!">
  <meta name="image" content="<?php echo $theme_dir ?>/img/share-img.jpg">
  <meta name="og:title" content="YCM 10th Annual Summit 2018 • Distributed Economy">
  <meta name="og:description" content="YCM (Young Corporate Malaysians) will be hosting its 10th Annual Summit 2018 on Distributed Economy! Join us on 24th November 2018 in Kuala Lumpur!">
  <meta name="og:image" content="<?php echo $theme_dir ?>/img/share-img.jpg">
  <meta name="og:url" content="https://summit.ycm.org.my/">
  <meta name="og:site_name" content="YCM 10th Annual Summit 2018 • Distributed Economy">
  <meta name="og:type" content="website">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo $theme_dir ?>/img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo $theme_dir ?>/img/favicon-16x16.png" sizes="16x16" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $theme_dir ?>/css/main.css">
</head>
<body>

<!-- Navigation -->
<header class="nav-bar" id="nav-bar">
  <div class="ycm-gradient-bar is-top" role="presentation"></div>
  <div class="nav-logos">
    <a href="http://www.ycm.org.my" rel="noreferrer noopener nofollow" target="_blank" class="nav-logos__ycm" data-track-click="General;Navigation - Click;YCM">
      <img src="<?php echo $theme_dir ?>/img/logos/ycm-white.svg" class="ycm-logo-white" alt="Logo of YCM">
      <img src="<?php echo $theme_dir ?>/img/logos/ycm-black.svg" class="ycm-logo-black" alt="Logo of YCM">
    </a>
    <a href="#" class="nav-logos__de" data-smooth-scroll data-track-click="General;Navigation - Click;Distributed Economy">
      <img src="<?php echo $theme_dir ?>/img/logos/de-masthead-black.svg" class="de-logo-black" alt="Logo of Distributed Economy">
    </a>
  </div>

  <!-- Mobile Fixed Menu -->
  <div class="nav-bar-mobile">
    <button
      class="btn btn-light nav-hamburger"
      id="nav-hamburger"
      aria-label="Menu"
      aria-haspopup="true"
      aria-expanded="false"
      aria-controls="nav-mobile-menu"
      data-track-click="General;Navigation - Hamburger"
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
    <a href="#about" class="nav-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;About">About</a>
    <a href="#agenda" class="nav-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;Agenda">Agenda</a>
    <a href="#speakers" class="nav-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;Speakers">Speakers</a>
    <a href="#sponsors" class="nav-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;Sponsors">Sponsors</a>
  </nav>
</header>

<!-- Mobile Menu -->
<nav class="nav-mobile-menu" id="nav-mobile-menu" aria-labelledby="">
  <a href="#about" class="nav-mobile-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;About">About</a>
  <a href="#agenda" class="nav-mobile-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;Agenda">Agenda</a>
  <a href="#speakers" class="nav-mobile-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;Speakers">Speakers</a>
  <a href="#sponsors" class="nav-mobile-menu__item" data-smooth-scroll data-track-click="General;Navigation - Click;Sponsors">Sponsors</a>
</nav>

<main>

<!-- Hero -->
<section class="hero" id="hero">

  <div class="hero-pattern" aria-hidden="true">
    <div class="hero-pattern__image" role="presentation"></div>
  </div>

  <header class="hero-masthead">
    <h1 class="hero-masthead__logo">
      <img src="<?php echo $theme_dir ?>/img/logos/de-masthead.svg" alt="10th Annual YCM Summit: Distributed Economy">
    </h1>
    <div class="hero-masthead__dateline">
      10th Annual YCM Summit
      <br>
      <time datetime="2018-11-17T08:30:00+08:00">Nov&nbsp;24&nbsp;2018</time>&ensp;&middot;&ensp;Kuala&nbsp;Lumpur&ensp;&middot;&ensp;8.30AM&nbsp;-&nbsp;5.00PM
      <br>
      <span class="badge badge-light">Application Closed</span>
    </div>
  </header>

  <footer class="hero-footer">
    <div class="row align-items-end">
      <div class="col-md-4 text-center text-lg-left mb-4 mb-lg-0">
        <img
          src="<?php echo $theme_dir ?>/img/logos/ycm-10th-anniversary.png"
          srcset="<?php echo $theme_dir ?>/img/logos/ycm-10th-anniversary@2x.png 2x"
          alt="YCM 10th Anniversary"
        >
      </div>
      <div class="col-md-4 text-center">
        <a href="#about" class="hero-footer__chevron" data-smooth-scroll data-track-click="Home;Click - Hero Scroll Indicator">
          <svg class="icon" aria-label="Scroll to next section">
            <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-chevron-down"></use>
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
        <img class="about-de-pattern" src="<?php echo $theme_dir ?>/img/pattern-01.png" role="presentation">
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
              <img src="<?php echo $theme_dir ?>/img/de-diagram-01.svg" alt="">
              <span>Centralised</span>
            </div>
            <div class="de-diagram__item">
              <img src="<?php echo $theme_dir ?>/img/de-diagram-02.svg" alt="">
              <span>Shared</span>
            </div>
            <div class="de-diagram__item">
              <img src="<?php echo $theme_dir ?>/img/de-diagram-03.svg" alt="">
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
                <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-briefcase"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Employment &amp; Job Creation
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-cubes"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Blockchain &amp; Open Financial Technologies
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-upwards"></use>
              </svg>
            </div>
            <span class="about-de-areas__title">
              Inequality: Progress for Everyone
            </span>
          </li>
          <li class="about-de-areas__item">
            <div class="about-de-areas__icon">
              <svg class="icon">
                <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-government"></use>
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
        <img src="<?php echo $theme_dir ?>/img/de-diagram-01.svg" alt="">
        <span>Centralised</span>
      </div>
      <div class="de-diagram__item">
        <img src="<?php echo $theme_dir ?>/img/de-diagram-02.svg" alt="">
        <span>Shared</span>
      </div>
      <div class="de-diagram__item">
        <img src="<?php echo $theme_dir ?>/img/de-diagram-03.svg" alt="">
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
        <?php while ($agendaQuery->have_posts()): $agendaQuery->the_post() ?>
          <?php global $post; ?>
          <li class="col-md-6 mb-3">
            <div
              id="agenda-item-<?php echo $post->post_name ?>"
              class="agenda-item"
              data-toggle="modal"
              data-target="#agenda-modal-<?php echo $post->post_name ?>"
              role="button"
              tabindex="0"
              data-track-click="Home;Click - Agenda;<?php the_title() ?>"
            >
              <div class="agenda-item__header">
                <span class="agenda-item__type"><?php the_field('type') ?>&ensp;&middot;&ensp;<?php the_field('time') ?></span>
                <p class="agenda-item__title"><?php the_title() ?></p>
              </div>
              <div class="agenda-item__icon">
                <svg class="icon">
                  <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-arrow-right"></use>
                </svg>
              </div>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>

      <!-- Disclaimer -->
      <div class="alert alert-secondary" role="alert">
        <small><em>This list may be subject to change</em></small>
      </div>

    </div>
  </div>
</section>


<!-- Agenda Modals -->
<?php while ($agendaQuery->have_posts()): $agendaQuery->the_post() ?>
  <?php global $post; ?>
  <article class="modal fade" tabindex="-1" role="dialog" id="agenda-modal-<?php echo $post->post_name ?>" aria-labelledby="agenda-item-<?php echo $post->post_name ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="agenda-modal modal-dark modal-content">
        <div class="modal-header">
          <header>
            <span class="agenda-modal__type"><?php the_field('type') ?>&ensp;&middot;&ensp;<?php the_field('time') ?></span>
            <h1><?php the_title() ?></h1>
          </header>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php the_field('description') ?>

          <?php $speakers = get_field('speakers'); ?>
          <?php if ($speakers): ?>
            <h5><strong>Speakers</strong></h5>
            <div class="row">
              <?php foreach ($speakers as $speaker): ?>
                <div class="col-12 col-sm-6 d-flex align-items-center mb-2">
                  <img
                    class="mr-2"
                    style="width: 50px; height: 50px;"
                    src="<?php the_field('profile_photo', $speaker->ID) ?>"
                    alt="Photo of <?php echo $speaker->post_title ?>"
                  >
                  <strong><?php echo $speaker->post_title ?></strong>
                </div>
              <?php endforeach ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>


<!-- Speakers Section -->
<a class="anchor is-offset" id="speakers"></a>
<section class="speakers-section section">
  <div class="container">
    <header class="section-header">
      <h2 class="section-title">Speakers</h2>
    </header>
  </div>

  <div class="container">

    <!-- Speakers List -->
    <ul class="speakers-item-list row">
      <?php while ($speakersQuery->have_posts()): $speakersQuery->the_post() ?>
        <li class="col-6 col-md-4 col-lg-3">
          <?php global $post; ?>
          <button
            class="speakers-item"
            id="speaker-item-<?php echo $post->post_name ?>"
            data-toggle="modal"
            data-target="#speaker-modal-<?php echo $post->post_name ?>"
            data-track-click="Home;Click - Speaker;<?php the_title() ?>"
          >
            <div class="speakers-item__profile">
              <?php if (get_field('profile_photo')): ?>
                <img src="<?php the_field('profile_photo') ?>" alt="Photo of <?php the_title() ?>">
              <?php else: ?>
                <img src="<?php echo $theme_dir ?>/img/speakers/placeholder.png" alt="Placeholder image">
              <?php endif; ?>
              <div class="speakers-item__logo">
                <img src="<?php the_field('company_logo') ?>" alt="Logo of <?php the_field('company') ?>">
              </div>
              <svg class="speakers-item__open-icon icon" aria-hidden="true">
                <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-arrow-right"></use>
              </svg>
            </div>
            <p class="speakers-item__details">
              <strong><?php the_title() ?></strong><br>
              <small>
                <?php the_field('title') ?><br>
                <em><?php the_field('company') ?></em>
              </small>
            </p>
          </button>
        </li>
      <?php endwhile; ?>
    </ul>

    <div class="alert alert-secondary" role="alert">
      <small><em>This list may be subject to change.</em></small>
    </div>

  </div>

</section>


<!-- Speakers Modals -->
<?php while ($speakersQuery->have_posts()): $speakersQuery->the_post(); ?>
<?php global $post; ?>
<article class="modal fade" tabindex="-1" role="dialog" id="speaker-modal-<?php echo $post->post_name ?>" aria-labelledby="speaker-item-<?php echo $post->post_name ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="speakers-modal modal-dark modal-content">
      <div class="modal-header">
        <header>
          <h1><?php the_title() ?></h1>
          <?php the_field('title') ?><br>
          <?php the_field('company') ?>
        </header>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php the_field('description'); ?>
      </div>
    </div>
  </div>
</article>
<?php endwhile; ?>


<!-- Article Section -->
<?php wp_reset_query(); ?>
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
    <button class="article-item-control is-prev" data-track-click="Home;Click - Article Carousel Control;Previous">
      <svg class="icon" aria-label="Previous">
        <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-arrow-left"></use>
      </svg>
    </button>

    <!-- Carousel -->
    <div class="article-item-list" id="article-item-list">
      <?php while (have_rows('articles')): the_row() ?>
        <a
          href="<?php the_sub_field('article_url') ?>"
          target="_blank"
          rel="noopener nofollow noreferrer"
          class="article-item"
          data-track-click="Home;Click - Article;<?php the_sub_field('article_url') ?>"
        >
          <div class="article-item__image" aria-hidden="true">
            <img src="<?php the_sub_field('article_image') ?>" alt="Cover photo for <?php the_sub_field('article_title') ?>">
          </div>
          <div class="article-item__details">
            <time><?php the_sub_field('article_date') ?></time>
            <span class="article-item__title">
              <?php the_sub_field('article_title') ?>
            </span>
            <ul class="article-item__tags">
              <li><?php the_sub_field('article_label') ?></li>
            </ul>
          </div>
        </a>
      <?php endwhile; ?>
    </div>

    <!-- Next Button -->
    <button class="article-item-control is-next" data-track-click="Home;Click - Article Carousel Control;Next">
      <svg class="icon" aria-label="Next">
        <use xlink:href="<?php echo $theme_dir ?>/svg/sprites.svg#icon-arrow-right"></use>
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
        <a href="https://www.pwc.com/my/en.html" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer" data-track-click="Home;Click - Sponsor;PwC Malaysia">
          <div class="sponsor-item__logo">
            <img src="<?php echo $theme_dir ?>/img/logos/pwc.png" srcset="<?php echo $theme_dir ?>/img/logos/pwc@2x.png" alt="Logo of PwC">
          </div>
          <p class="sponsor-item__name">PwC Malaysia</p>
        </a>
      </li>
      <li>
        <a href="https://www.cimb.com/en/index.html" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer" data-track-click="Home;Click - Sponsor;CIMB">
          <div class="sponsor-item__logo">
            <img src="<?php echo $theme_dir ?>/img/logos/cimb.png" srcset="<?php echo $theme_dir ?>/img/logos/cimb@2x.png" alt="Logo of CIMB">
          </div>
          <p class="sponsor-item__name">CIMB</p>
        </a>
      </li>
      <li>
        <a href="https://www.brunsfield.com/" target="_blank" rel="noopener nofollow noreferrer" class="sponsor-item" data-track-click="Home;Click - Sponsor;Brunsfield">
          <div class="sponsor-item__logo">
            <img src="<?php echo $theme_dir ?>/img/logos/brunsfield.png" srcset="<?php echo $theme_dir ?>/img/logos/brunsfield@2x.png" alt="Logo of Brunsfield">
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
        <a href="https://axiatafoundation.com/" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer" data-track-click="Home;Click - Sponsor;Axiata Foundation">
          <div class="sponsor-item__logo">
            <img src="<?php echo $theme_dir ?>/img/logos/axiata.png" srcset="<?php echo $theme_dir ?>/img/logos/axiata@2x.png" alt="Logo of Axiata Foundation">
          </div>
          <p class="sponsor-item__name">Axiata Foundation</p>
        </a>
      </li>
    </ul>
  </div>

  <div class="container">
    <ul class="sponsor-item-list">
      <li>
        <a href="https://graduan.com/" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer" data-track-click="Home;Click - Sponsor;Graduan">
          <h2 class="section-title">Career Partner</h2>
          <div class="sponsor-item__logo">
            <img src="<?php echo $theme_dir ?>/img/logos/graduan.png" srcset="<?php echo $theme_dir ?>/img/logos/graduan@2x.png" alt="Logo of Graduan">
          </div>
          <p class="sponsor-item__name">Graduan</p>
        </a>
      </li>
      <li>
        <a href="https://graduan.com/" class="sponsor-item" target="_blank" rel="noopener nofollow noreferrer" data-track-click="Home;Click - Sponsor;Graduan">
          <h2 class="section-title">Event Partner</h2>
          <div class="sponsor-item__logo">
            <img src="<?php echo $theme_dir ?>/img/logos/moovby.png" srcset="<?php echo $theme_dir ?>/img/logos/moovby@2x.png" alt="Logo of Moovby">
          </div>
          <p class="sponsor-item__name">Moovby</p>
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
      <h2 class="section-title">
        Application Closed
      </h2>
      <div class="row">

        <!-- Instructions -->
        <div class="col-lg-6">
          <div class="registration-instructions">
            <p class="registration-instructions__pullout">
              See you there!
            </p>
            <p>
              We have closed our registration. If you have registered and
              require assistance, you may contact us at
              <a href="mailto:summit@ycm.org.my">summit@ycm.org.my</a>.
            </p>
          </div>
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
        <a href="#" class="footer__logo mb-4" data-smooth-scroll data-track-click="General;Footer - Click;YCM Logo">
          <img src="<?php echo $theme_dir ?>/img/logos/ycm-white.svg" alt="Logo of YCM">
        </a>
        <small class="footer__disclaimer">Copyright (C) 2018 Young Corporate Malaysians</small>
      </div>

      <!-- Right Column -->
      <div class="col-md-4">
        <div class="row">

          <!-- Links -->
          <div class="col-md-6 mb-4 mb-md-0">
            <ul class="footer-links">
              <li><a href="#about" data-smooth-scroll data-track-click="General;Footer - Click;About">About</a></li>
              <li><a href="#agenda" data-smooth-scroll data-track-click="General;Footer - Click;Agenda">Agenda</a></li>
              <li><a href="#speakers" data-smooth-scroll data-track-click="General;Footer - Click;Speakers">Speakers</a></li>
              <li><a href="#sponsors" data-smooth-scroll data-track-click="General;Footer - Click;Sponsors">Sponsors</a></li>
              <li><a href="#register" data-smooth-scroll data-track-click="General;Footer - Click;Apply Now">Apply Now</a></li>
              <li><a href="http://www.ycm.org.my" rel="noreferrer noopener nofollow" target="_blank" data-track-click="General;Footer - Click;About YCM">About YCM</a></li>
            </ul>
          </div>

          <!-- Social Links -->
          <div class="col-md-6">
            <ul class="footer-links">
              <li><a href="https://www.facebook.com/YoungCorpMsians" rel="noreferrer noopener nofollow" target="_blank" data-track-click="General;Footer - Click;Facebook">Facebook</a></li>
              <li><a href="https://www.instagram.com/youngcorpmsians" rel="noreferrer noopener nofollow" target="_blank" data-track-click="General;Footer - Click;Instagram">Instagram</a></li>
              <li><a href="https://www.linkedin.com/company/young-corporate-malaysians/" rel="noreferrer noopener nofollow" target="_blank" data-track-click="General;Footer - Click;LinkedIn">LinkedIn</a></li>
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
<script src="<?php echo $theme_dir ?>/js/app.js?c=<?php echo date('W') ?>" charset="utf-8"></script>

</body>
</html>
