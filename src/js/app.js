/**
 * YCM Summit 2018: Distributed Economy
 * @author James Ooi <wengteikooi@gmail.com>
 * @organization Young Corporate Malaysians
 */

import 'slick-carousel';
import $ from 'jquery';
import ScrollMonitor from 'scrollmonitor';
import MoveTo from 'moveto';

window.addEventListener('DOMContentLoaded', () => {
  $('#article-item-list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: '.article-item-control.is-next',
    prevArrow: '.article-item-control.is-prev',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  enableNavbarColorToggle();
  enableHamburgerMenu();
  enableSmoothScrolling();
});


/**
 * Enables the navbar color toggle functionality.
 * @requires ScrollMonitor
 */
function enableNavbarColorToggle() {
  const hero = document.getElementById('hero');
  const navbar = document.getElementById('nav-bar');
  const watcher = ScrollMonitor.create(hero);
  watcher.exitViewport(() => navbar.classList.add('is-opaque'));
  watcher.enterViewport(() => navbar.classList.remove('is-opaque'));
}


/**
 * Enables the hamburger menu functionality.
 */
function enableHamburgerMenu() {
  const hamburger = document.getElementById('nav-hamburger');
  const menu = document.getElementById('nav-mobile-menu');
  const navbar = document.getElementById('nav-bar');

  const bodyListener = (e) => {
    if (menu.contains(e.target)) {
      return;
    }
    menu.classList.remove('is-active');
    hamburger.classList.remove('is-active');
    navbar.classList.remove('is-active');
    document.body.classList.remove('has-backdrop');
    window.removeEventListener('click', bodyListener);
  }

  $(hamburger).on('click', (e) => {
    e.stopPropagation();
    e.preventDefault();
    if (menu.classList.contains('is-active')) {
      menu.classList.remove('is-active');
      hamburger.classList.remove('is-active');
      navbar.classList.remove('is-active');
      document.body.classList.remove('has-backdrop');
    } else {
      menu.classList.add('is-active');
      hamburger.classList.add('is-active');
      navbar.classList.add('is-active');
      document.body.classList.add('has-backdrop');
      window.addEventListener('click', bodyListener);
    }
  });
}


/**
 * Enables smooth scrolling to anchor links.
 */
function enableSmoothScrolling() {
  const moveTo = new MoveTo();
  $('a[data-smooth-scroll][href]').each(function() {
    const targetId = $(this).attr('href').substr(1);
    const targetElement = targetId
      ? document.getElementById(targetId)
      : document.documentElement;

    $(this).on('click', (e) => {
      e.preventDefault();
      if (!targetElement) return;
      moveTo.move(targetElement);
    });
  });
}