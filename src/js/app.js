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
  enableArticleCarousel();
  enableNavbarColorToggle();
  enableHamburgerMenu();
  enableSmoothScrolling();
  enableFormValidation();
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
    // if (menu.contains(e.target)) {
    //   return;
    // }
    menu.classList.remove('is-active');
    hamburger.classList.remove('is-active');
    hamburger.setAttribute('aria-expanded', 'false');
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
      hamburger.setAttribute('aria-expanded', 'true');
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


function enableArticleCarousel() {
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
}


/**
 * Enables form validation functionalities.
 */
function enableFormValidation() {

  let fields = {};

  // Compute initial state
  $('#registration-form input').each(function() {
    fields[$(this).attr('name')] = {
      element: $(this)[0],
      errors: [],
    }
  });

  $('#registration-form').on('submit', function(e) {
    hideErrors();
    if (!validateFields()) {
      displayErrors();
      e.preventDefault();
      return;
    }
  });

  function validateFields() {
    let isValid = true;
    Object.keys(fields).forEach(key => {
      fields[key].errors = [];
      if (fields[key].element.value == '') {
        fields[key].errors.push('This field is required.');
        isValid = false;
      }
    });
    return isValid;
  }

  function displayErrors() {
    Object.keys(fields).forEach(key => {
      if (fields[key].errors.length > 0) {
        $(`.error-label[for='${key}']`).text(fields[key].errors[0]);
      }
    });
  }

  function hideErrors() {
    Object.keys(fields).forEach(key => {
      $(`.error-label[for='${key}']`).text('');
    });
  }
}