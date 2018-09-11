/**
 * YCM Summit 2018: Distributed Economy
 * @author James Ooi <wengteikooi@gmail.com>
 * @organization Young Corporate Malaysians
 */

import 'slick-carousel';
import $ from 'jquery';
import ScrollMonitor from 'scrollmonitor';

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
});

function enableNavbarColorToggle() {
  const hero = document.getElementById('hero');
  const navbar = document.getElementById('nav-bar');
  const watcher = ScrollMonitor.create(hero);
  watcher.exitViewport(() => navbar.classList.add('is-opaque'));
  watcher.enterViewport(() => navbar.classList.remove('is-opaque'));
}